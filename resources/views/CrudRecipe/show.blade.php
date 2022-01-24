<x-app-layout> <x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">{{
	__('Post') }}</h2>
</x-slot>

<div class="py-12">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

			<div class="bg-white shadow overflow-hidden sm:rounded-lg">
				<div class="px-4 py-5 border-b border-gray-200 sm:px-6">
					<h3 class="text-lg leading-6 font-medium text-gray-900">Post
						#{{$recipe->id}} Informació</h3>
					<p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">Informació del post<br>
					<a href="{{route('posts.index')}}" style="color:blue">Tornar enrere</a>
					</p>
				</div>
				<div>
					<dl>
						<div
							class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
							<dt class="text-sm leading-5 font-medium text-gray-500">Titol post
							</dt>
							<dd
								class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
								{{$recipe->title}}</dd>
						</div>
						<div
							class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
							<dt class="text-sm leading-5 font-medium text-gray-500">Contingut</dt>
							<dd
								class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
								{{$recipe->description}}</dd>
						</div>
						<div
							class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
							<dt class="text-sm leading-5 font-medium text-gray-500">Imatge</dt>
							<dd
								class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
								{{$recipe->prepTime}}</dd>
						</div>
						<div
							class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
							<dt class="text-sm leading-5 font-medium text-gray-500">Autor</dt>
							<dd
								class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
								{{$recipe->author->name}}</dd>
						</div>
					</dl>
				</div>
			</div>

			</tbody>
			</table>
		</div>
	</div>
</div>
</x-app-layout>
