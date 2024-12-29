<?php

namespace App\Livewire\MyAccount;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormUserImage extends Component
{
    use WithFileUploads;
    public $image, $path, $prevImage, $user_id;
    protected function rules()
    {
        return [
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
    public function render()
    {
        $user = User::find(Auth::user()->id);
        $this->prevImage = $user->image;
        $this->user_id = $user->id;
        return view('livewire.my-account.form-user-image');
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'image') {
            $this->save();
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->image) {
            $this->path = $this->image->store('user-profile', 'public');
            if ($this->prevImage != 'user-profile/default.jpg') {
                Storage::disk('public')->delete($this->prevImage);
            }
        }


        User::where('id', $this->user_id)->update([
            'image' => $this->path ? $this->path : $this->prevImage,
        ]);


        flash('User Image Berhasil Diupdate', 'success');
        return redirect()->route('my-account.account');
    }
}
