<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Post;
use Route;

class CUPostRequest extends FormRequest
{
    
    protected $rules;

    function __construct() {
        $this->rules = [
            "title" => 'required|max:100|unique:posts,title',
            "body" => "required"
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         *
         * Disallowing unauthenticated Users
        if ( ! Auth::check() )
        {
            return false;
        }
        
         * Disallowing unauthorized users or who are not eligible for this post's updation
        $thingBeingEdited = Thing::find(Input::get('thingId'));
        if ( ! $thingBeingEdited || $thingBeingEdited->owner != Auth::id()) {
            return false;
        }

        return true;
        */

        //Allowing all users
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = $this->rules;

        if(Route::currentRouteName() == 'post.update'){
            $postId = $this->route('post');  //bcz our rute is put('post/{post}')
            $rules['title'] = 'required|max:100|unique:posts,title,' . $postId->id . ',id';
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Please give a short and meaningful title',
            'title.max' => 'Title must be short(Max 100 char)...',
            'title.unique' => 'Title is already given to another post, Please choose other title!',
            'body.required'  => 'Hey, You missed contect of the post...!',
        ];
    }

}
