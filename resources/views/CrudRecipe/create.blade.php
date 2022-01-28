<x-app-layout>
	<!-- <div style="z-index:1" id="recipeModal" class="modal hidden bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0">
		<div class="bg-white px-16 py-14 rounded-md text-center">
			<h1 class="text-xl mb-4 font-bold text-slate-500">Crear pas</h1>
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

			<form id="stepData">
				<dl>
					<dt class="text-sm leading-5 font-medium text-gray-500">Nom</dt>
					<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="name" id="name">
					</dd>
					<dt class="text-sm leading-5 font-medium text-gray-500">Explicació</dt>
					<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
						<textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-content" type="text" name="text">
						</textarea>
					</dd>
					<dt class="text-sm leading-5 font-medium text-gray-500">Foto</dt>
					<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-image" type="file" name="photo">
					</dd>
					<input type="submit" value="Submit" id="submit" class="mt-4 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" style="font-size: 0.8em;">
				</dl>
			</form>
		</div>
	</div> -->

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
			<!--  -->
				<form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data" id="recipeForm">
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
								<div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
									<dt class="text-sm leading-5 font-medium text-gray-500">Titol de la recepta</dt>
									<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
										<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-title" type="text" name="title">
									</dd>
								</div>
								<div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
									<dt class="text-sm leading-5 font-medium text-gray-500">Descripció</dt>
									<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
										<textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-content" type="text" name="description">
									</textarea>
									</dd>
								</div>
								<div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
									<dt class="text-sm leading-5 font-medium text-gray-500">Temps de preparació</dt>
									<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
										<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-image" type="text" name="prepTime">
									</dd>
								</div>
								<div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
									<dt class="text-sm leading-5 font-medium text-gray-500">Categoria</dt>
									<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
										<select name="category_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
											@foreach($categories as $cat)
											<option value="{{$cat->id}}">{{$cat->name}}</option>
											@endforeach
										</select>
									</dd>
								</div>
								<div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
									<dt class="text-sm leading-5 font-medium text-gray-500">Imatge</dt>
									<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
										<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-image" type="file" name="image">
									</dd>
								</div>
								<div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
									<dt class="text-sm leading-5 font-medium text-gray-500">Pasos</dt>
									<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
										<a href="javascript:void(0)" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em; width:100px;" id="createNewStep">Crear pas</a>
										<div id="steps"></div>
									</dd>
								</div>
								<div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
									<dt class="text-sm leading-5 font-medium text-gray-500"></dt>
									<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
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
	<script>
		let id = 0;

		$("body").on("click", "#createNewStep", function(e) {
			e.preventDefault;
			id++;
			addStep(id);

		});

		function getRecipes(){
			
			// $("#steps").each(function() {
				jsonObj = [];

				// console.log(id, i);
				for (let i = 0; i < id; i++) {
					var step = "#step"+i;
					console.log(step)
					$(step).each(function(){
						var name = $(this).find("input[name=name]").val();
						var text = $(this).find("textarea[name=textRecipe]").val();
						// var image = $(this).find("input[name=slot_type]").val();
						console.log(name);

						item = {};
						item["name"] = name;
						item["text"] = text;
						jsonObj.push(item);
					});

				}
				
				return jsonObj;
				
			// });
		
		}
		
			
		$('#recipeForm').submit(function(e){
			e.preventDefault();
			var obj = getRecipes();

			console.log(obj);
			
		});


		function addStep(id) {

			var rows = '';

			rows = rows + '<div id="step'+ id+'">';
			rows = rows + '<span class="mt-3">Pas ' + id + '</span>';

			rows = rows + '<input class="mt-3 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="name" id="name">';

			rows = rows + '<textarea class="mt-3 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-content" type="text" name="textRecipe"></textarea>';

			// rows = rows + '<input class="mt-3 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-image" type="file" name="image' + id + '">';

			rows = rows + '</div>';

			

			$("#steps").append(rows);
		}



		
	</script>
</x-app-layout>