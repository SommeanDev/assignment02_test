<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > All Users')}}
    </x-slot>
    <div class="flex flex-col">
        @if(Session::has('admin_flash'))
            <x-alert type="error" position="top-right">{{ Session('admin_flash') }}</x-alert>
        @endif
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-sm font-light text-left">
                <thead class="font-medium border-b dark:border-neutral-500">
                    <tr>
                    <x-admin-table-header scope="col" >#</x-admin-table-header>
                    <x-admin-table-header scope="col" >Name</x-admin-table-header>
                    <x-admin-table-header scope="col" >Email</x-admin-table-header>
                    <x-admin-table-header scope="col" >Role</x-admin-table-header>
                    <x-admin-table-header scope="col" >Active</x-admin-table-header>
                    <x-admin-table-header scope="col" >Created At</x-admin-table-header>
                    <x-admin-table-header scope="col" >Updated At</x-admin-table-header>
                    </tr>
                </thead>
                <tbody>
                    @if($users)
                        @foreach ($users as $user)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $user->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('admin-users-edit', $user->id)}}">{{ $user->name }}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->role->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->active == 1? 'Yes' : 'No' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->created_at->diffForHumans() }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->updated_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
                </table>
            </div>
            </div>
        </div>
          </div>
        </div>
      </div>
</x-admin-layout>
