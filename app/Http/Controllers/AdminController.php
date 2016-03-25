<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Recipe;
use App\Ingredient;
use App\Category;
use App\Ingredient_to_recipe;

class AdminController extends Controller
{
    
    public function index()
    {
        $users = User::all()->count();
        $recipes = Recipe::all()->count();
        $ingredients = Ingredient::all()->count();
        $categories = Category::all();
        
        
        
        return view('admin.index', [
            'categories'=>$categories,
            'recipes' => $recipes,
            'users' => $users,
            'ingredients' => $ingredients,
            ]);
    }
    
    public function recipe()
    {
        $recipes= Recipe::paginate(25);
        
        
        return view('admin.recipe' ,['recipes' => $recipes]);
    }
    
    public function ingredient()
    {
        $ingredients = Ingredient::paginate(25);
        
        return view('admin.ingredient' ,['ingredients' => $ingredients]);
    }
    
    public function ingredientEdit($id)
    {
        $ingredient = Ingredient::find($id);
        
        if($ingredient == null){
            return redirect()->back()->with('status-warning', "Ingrediente non trovato!");
        }else{
            return view('admin.ingredientEdit' ,['ingredient' => $ingredient]);
        }
    }
    public function ingredientUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required | min:3'
            ]);
            
        $ingredient = Ingredient::find($id);
        
        if($ingredient == null){
            return redirect()->back()->with('status-warning', "Ingrediente non trovato!");
        }else{
            $cerca = Ingredient::where('name',$request->name)->first();
            if($cerca == null){
            
                $ingredient->name = $request->name;
                $ingredient->save();
                
                return redirect()->route('admin.ingredient')->with('status', "Ingrediente modificato con successo!");
            }else{
                
               return redirect()->back()->with('status-warning', "E' gia presente un ingrediente con questo nome!"); 
            }
        }
    }
    public function ingredientDestroy($id)
    {
        $ingredient = Ingredient::find($id);
        if($ingredient != null){
            $used = Ingredient_to_recipe::where('ingredient_id',$id)->count() ;
            
            if($used == 0){
                $ingredient->delete();
                return redirect()->back()->with('status', "Ingrediente eliminato con successo!");
            }else{
                return redirect()->back()->with('status-warning', "Ci sono ricette che usano questo ingrediente, non è possibile eliminarlo!"); 
            }
        }else{
            return redirect()->back()->with('status-warning', "Ingrediente non trovato!");
        }
        
    }
    
    public function user()
    {
        $users = User::paginate(25);
        
        return view('admin.user' ,['users' => $users]);
    }
    
    public function category()
    {
        $categories = Category::paginate(25);
        
        return view('admin.category' ,['categories' => $categories]);
        
    }
    public function categoryEdit($id)
    {
        $cateogry = Category::find($id);
        
        if($cateogry == null){
            return redirect()->back()->with('status-warning', "Categoria non trovata!");
        }else{
            return view('admin.categoryEdit' ,['category' => $cateogry]);
        }
    }
    public function categoryUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required | min:3'
            ]);
            
        $category = Category::find($id);
        
        if($category == null){
            return redirect()->back()->with('status-warning', "Categoria non trovata!");
        }else{
            $cerca = Category::where('name',$request->name)->first();
            if($cerca == null){
            
                $category->name = $request->name;
                $category->save();
                
                return redirect()->route('admin.category')->with('status', "Categoria modificata con successo!");
            }else{
                
               return redirect()->back()->with('status-warning', "E' gia presente una Cateogria con questo nome!"); 
            }
        }
    }
    public function categoryDestroy($id)
    {
        $category = Ingredient::find($id);
        if($category != null){
            $used = Recipe::where('category_id',$id)->count() ;
            
            if($used == 0){
                $category->delete();
                return redirect()->back()->with('status', "Cateogria eliminata con successo!");
            }else{
                return redirect()->back()->with('status-warning', "Ci sono ricette appartenenti a questa Categoria, non è possibile eliminarla!"); 
            }
        }else{
            return redirect()->back()->with('status-warning', "Categoria non trovata!");
        }
        
    }
    public function categoryStore(Request $request)
    {
       $this->validate($request, [
        'name' => 'required | min:3',

        ]);
        if( Cateogry::where("name",$request->name) != null ){
            $cateogry = new Category;
            $category->name = $request->name;
            $cateogry->save();
            
            return redirect()->route('admin.category')->with('status', "Categoria aggiunta con successo!");
            
        }else{
            
            return redirect()->back()->with('status-warning', "Categoria già presente!");
        }
    
    }
}
