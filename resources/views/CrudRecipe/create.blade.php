<x-app-layout> <x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">{{
	__('Posts') }}</h2>
</x-slot>

<div class="py-12">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
			<form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
				<div class="bg-white shadow overflow-hidden sm:rounded-lg">
					<div class="px-4 py-5 border-b border-gray-200 sm:px-6">
						<h3 class="text-lg leading-6 font-medium text-gray-900">Post content</h3>
						<p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">Informació personal.
							<a href="{{route('recipes.index')}}" style="color:blue">Tornar enrere</a>
						</p>
					</div>
					<div>
						<dl>
							<div
								class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								<dt class="text-sm leading-5 font-medium text-gray-500">Titol de la recepta</dt>
								<dd
									class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
									<input
										class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
										id="grid-title" type="text" name="title">
								</dd>
							</div>
							<div
								class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								<dt class="text-sm leading-5 font-medium text-gray-500">Descripció</dt>
								<dd
									class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
									<textarea
										class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
										id="grid-content" type="text" name="description"
										>
									</textarea>
								</dd>
							</div>
							<div
								class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								<dt class="text-sm leading-5 font-medium text-gray-500">Temps de preparació</dt>
								<dd
									class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
									<input
										class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
										id="grid-image" type="text" name="prepTime">
								</dd>
							</div>
							<div
								class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								<dt class="text-sm leading-5 font-medium text-gray-500">Categoria</dt>
								<dd
									class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
									<select name="category_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
										@foreach($categories as $cat)
										<option value="{{$cat->id}}">{{$cat->name}}</option>
										@endforeach
									</select>
								</dd>
							</div>
							<div
								class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								<dt class="text-sm leading-5 font-medium text-gray-500">Imatge</dt>
								<dd
									class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
									<input
										class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
										id="grid-image" type="file" name="image">
								</dd>
							</div>
							<div
								class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								<dt class="text-sm leading-5 font-medium text-gray-500"></dt>
								<dd 
									class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
										<button type="submit" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">Submit</button>
								</dd>
							</div>
						</dl>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</x-app-layout>