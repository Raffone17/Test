<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Recipe;
use App\Category;
use App\Ingredient_to_recipe;
use App\Ingredient;

use DB;

class SearchController extends Controller
{
    public function searchTitle(Request $request)
    {   
   
         $this->validate($request, [
             'search' => 'required | min:3'
             ]);
             
        $category = Category::where('name', $request->search )->first();
        $user = User::where('name', $request->search)->first();
        
        if($category != null){
            
            $recipes = Recipe::where('category_id',$category->id)->paginate(6);
           
            $recipes->appends(['search' => $request->search])->links();
            
            $statusinfo = 'Recetta della categoria: "'.$request->search.'"';
            
            /*$var1 = 'category_id';
            $var2 = '=';
            $var3 = $category->id;*/
        
        }else if($user != null){
            
            $recipes = Recipe::where('user_id',$user->id)->paginate(6);
            
            $recipes->appends(['search' => $request->search])->links();
            
            $statusinfo = 'Recetta dell\'utente : "'.$request->search.'"';
            
            /*$var1 = 'user_id';
            $var2 = '=';
            $var3 = $user->id;*/
        }
        else{
            
            $recipes = Recipe::where('title', 'like', '%'.$request->search.'%')->paginate(6);
            
            $recipes->appends(['search' => $request->search])->links();
            
            $statusinfo = 'Ricerca ricette per nome: "'.$request->search.'"';
            
            /*$var1 = 'title';
            $var2 = 'like';
            $var3 = '%'.$request->search.'%';*/
        }
        
        /*$recipes = DB::table('recipes')->join('ingredient_to_recipes','recipes.id','=','ingredient_to_recipes.recipe_id')
        ->join('categories', 'recipes.category_id', '=', 'categories.id')->join('users','recipes.user_id','=','users.id')
        ->where($var1,$var2,$var3)
        ->select('recipes.id','recipes.title','recipes.description','categories.name','recipes.difficult','recipes.created_at',
        DB::raw('users.name as user'),
        DB::raw('COUNT(ingredient_to_recipes.id) as ingredients'))->groupBy('recipes.title')->paginate(6);*/
        
        $recipes->appends(['search' => $request->search])->links();
        
         return view('recipe.index' ,['recipes' => $recipes, 'statusinfo' => $statusinfo ]);
        
    }
    
    public function searchIngredient(Request $request)
    {   
        
        
         $this->validate($request, [
             'ingredient' => 'required | min:3'
             ]);
             
    
       /*$recipes = DB::table('recipes')->join('ingredient_to_recipes','recipes.id','=','ingredient_to_recipes.recipe_id')
        ->join('categories', 'recipes.category_id', '=', 'categories.id')->join('users','recipes.user_id','=','users.id')
        ->join('ingredients', 'ingredient_to_recipes.ingredient_id', '=', 'ingredients.id')->where('ingredients.name', 'like', '%'.$request->ingredient.'%')
        ->select('recipes.id','recipes.title','recipes.description','categories.name','recipes.difficult','recipes.created_at',
        DB::raw('users.name as user'))->groupBy('recipes.title')->paginate(6);*/
        
        $recipes = Recipe::whereHas('ingredient_to_recipes', function ($query) use ($request) {
              
                $query->whereHas('ingredient', function ($query) use ($request) {
                    
                    $query->where('name', 'like', '%'.$request->ingredient.'%');
                });
            })->paginate(6);

        $recipes->appends(['ingredient' => $request->ingredient])->links();
        
        return view('recipe.index' ,['recipes' => $recipes ,'statusinfo' => 'Ricette contenenti l\'ingrediente: "'.$request->ingredient.'"' ]);
        
    }

}
