<?php
namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UsersServices {
    public static function delete($id) {
        DB::transaction(function () use ($id) {
            $user = User::findOrFail($id);
            // delete image
            File::delete(storage_path('app/public/users/'.$user->image));
            // delete bookshelves attached to user
            $user->bookshelves()->delete();
            $user->delete();
        });

        return redirect()->back();
    }
}