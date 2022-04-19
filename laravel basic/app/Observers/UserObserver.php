<?php

namespace App\Observers;

use App\Models\Blog;
use App\Models\User;
use SebastianBergmann\Environment\Console;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        // $user->name="Mr. ".$user->name;
        // $user->save();

        $title="New User ".$user->name." Created successfully.";
        $description="News user".$user->name." created. Created - ".$user->created_at->diffForHumans();

        $blog=new Blog();
        $blog->title=$title;
        $blog->blog_post=$description;
        $blog->user_id=$user->id;
        $blog->save();
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        $title="New User ".$user->name." Updated successfully.";
        $description="News user".$user->name." Updated. Updated - ".$user->updated_at->diffForHumans();

        $blog=new Blog();
        $blog->title=$title;
        $blog->blog_post=$description;
        $blog->user_id=$user->id;
        $blog->save();
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
