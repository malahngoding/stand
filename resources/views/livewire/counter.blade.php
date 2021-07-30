<div x-data>
    <style>
        body{background:white!important;}
    </style>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto text-white bg-yellow">
        <tr class="text-left border-b-2 border-pink font-bold">
        <th class="px-4 py-3">ID</th>
        <th class="px-4 py-3">NAME</th>
        <th class="px-4 py-3">EMAIL</th>
      </tr>
      @foreach ($users as $user)
      <tr class="bg-pink font-semibold">
        <td class="px-4 py-3 border-b border-white">{{ $user->id }}</td>
        <td class="px-4 py-3 border-b border-white">{{ $user->name }}</td>
        <td class="px-4 py-3 border-b border-white">{{ $user->email }}</td>
      </tr>
      @endforeach
    </table>

    <button wire:click="addData"
    class="max-w-sm px-3 py-2 mx-2 text-sm font-bold border-2 border-black rounded-md box-shadow shadow-drop sm:max-w-sm">
    Get All User</button>

</div>
