<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class Todo extends Component
{
    use WithPagination;

    public ?string $title = null;
    public ?int $todoId = null;

    protected array $rules = [
        'title' => 'required|max:30'
    ];

    public function render()
    {
        return view('livewire.todo', [
            'todos' => \App\Models\Todo::orderBy('sort', 'asc')->paginate(10)
        ]);
    }

    private function resetInput()
    {
        $this->title = null;
        $this->todoId = null;
    }

    public function store()
    {
        $this->validate();

        $data = array(
            'title' => $this->title
        );
        $todo = \App\Models\Todo::updateOrCreate(['id' => $this->todoId], $data);
        session()->flash('message', $this->id ? 'Company updated successfully.' : 'Company created successfully.');
        $this->resetInput();
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function statusUpdate($id, $status)
    {
        \App\Models\Todo::find($id)->update([
            'status' => $status
        ]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        $this->todoId = $id;
        \App\Models\Todo::find($id)->delete();
        session()->flash('message', 'Your todo deleted successfully.');
    }
}
