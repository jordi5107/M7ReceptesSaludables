<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main role="main">

    	<div
							class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
							<div>
								<a href="{{route('posts.create')}}"
									class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
									Crear Post
								</a>
							</div>
							<table class="min-w-full divide-y divide-gray-200">
								<thead>
									<tr>
										<th class="px-4 py-2">Titol</th>
										<th class="px-4 py-2">Contingut</th>
										<th class="px-4 py-2">Accions</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($posts as $post)
									<tr @if ($loop->
										odd) class="bg-gray-100" @endif >
										<td class="border px-4 py-2">{{$post->title}}</td>
										<td class="border px-4 py-2">{{$post->content}}</td>
										<td class="border px-4 py-2">

											<form action="{{ route('posts.destroy', $post) }}"
												method="POST">

												<a href="{{ route('posts.show', $post->id) }}"
													title="vuere"> <i class="fal fa-eye text-success  fa-lg"></i>
												</a> <a href="{{ route('posts.edit', $post->id) }}"
													title="editar"> <i class="fal fa-edit  fa-lg"></i>

												</a> @csrf @method('DELETE')

												<button type="submit" title="borrar"
													style="border: none; background-color: transparent;">
													<i class="fal fa-trash fa-lg text-danger"></i>

												</button>
											</form>

										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>

      </main>
</x-app-layout>
