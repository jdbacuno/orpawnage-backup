<x-admin-layout>
  <h1 class="text-2xl font-bold text-gray-900">Manage Pet Profiles</h1>

  <div class="bg-white p-6 shadow-md rounded-lg mt-4">
    <!-- Successful Add -->
    @if(session('add_success') && !session('modal_open'))
    <div id="alert-3"
      class="flex items-center p-4 mb-1 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 sm:col-span-7 edit-success w-full md:w-1/2"
      role="alert">
      <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 1 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div class="ms-3 text-sm font-medium">
        Pet {!! session('add_success') !!} has been added successfully!
      </div>
      <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
        data-dismiss-target="#alert-3" aria-label="Close" class="dismiss-btn">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
      </button>
    </div>
    @endif

    <!-- Successful Update -->
    @if(session('edit_success') && !session('modal_open'))
    <div id="alert-3"
      class="flex items-center p-4 mb-1 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 sm:col-span-7 edit-success w-full md:w-1/2"
      role="alert">
      <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 1 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div class="ms-3 text-sm font-medium">
        Pet {!! session('edit_success') !!} has been updated!
      </div>
      <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
        data-dismiss-target="#alert-3" aria-label="Close" class="dismiss-btn">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
      </button>
    </div>
    @endif

    <!-- Successful Add -->
    @if(session('delete_success') && !session('modal_open'))
    <div id="alert-3"
      class="flex items-center p-4 mb-1 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 sm:col-span-7 edit-success w-full md:w-1/2"
      role="alert">
      <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 1 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div class="ms-3 text-sm font-medium">
        {{ session('delete_success') }}
      </div>
      <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
        data-dismiss-target="#alert-3" aria-label="Close" class="dismiss-btn">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
      </button>
    </div>
    @endif

    <!-- Add New Pet Button -->
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold text-gray-800">Pet Profiles</h2>
      <!-- Add New Pet Button -->
      <button id="openModal"
        class="bg-yellow-500 hover:bg-orange-500 text-black font-semibold py-2 px-4 md:px-4 flex items-center justify-center md:rounded-md rounded-full w-10 h-10 md:w-auto md:h-auto">
        <i class="ph-fill ph-plus-circle"></i>
        <span class="hidden md:inline-flex ml-2">Add a New Pet</span>
      </button>
    </div>

    <!-- Pagination -->
    <div class="my-2">
      {{ $pets->links() }}
      <!-- Laravel default pagination links -->
    </div>

    <!-- Pet Profiles Table -->
    <div class="overflow-x-auto z-10">
      @if($pets->isEmpty())
      <div class="flex items-center justify-center p-6 text-gray-500">
        <p class="text-lg">No pets found.</p>
      </div>
      @else

      <table class="w-full border border-gray-200 rounded-lg">
        <thead>
          <tr class="bg-gray-100 text-gray-700">
            <th class="py-2 px-4 text-center bg-gray-700 text-gray-100 sticky left-[-1px]">Actions</th>
            <th class="py-2 px-4 text-center">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'id', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                ID <span>{!! request('sort') === 'id' ? (request('direction') === 'asc' ? '▲' : '▼') : ''
                  !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'pet_number', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Pet No. <span>{!! request('sort') === 'pet_number' ? (request('direction') === 'asc' ? '▲' : '▼') : ''
                  !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-center">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'pet_name', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Pet Name <span>{!! request('sort') === 'pet_name' ? (request('direction') === 'asc' ? '▲' : '▼') : ''
                  !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-left">Image</th>
            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'species', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Species <span>{!! request('sort') === 'species' ? (request('direction') === 'asc' ? '▲' : '▼') : ''
                  !!}</span>
              </a>
            </th>

            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'age', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Age <span>{!! request('sort') === 'age' ? (request('direction') === 'asc' ? '▲' : '▼') : '' !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'sex', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Sex <span>{!! request('sort') === 'sex' ? (request('direction') === 'asc' ? '▲' : '▼') : '' !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'reproductive_status', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Reproductive <span>{!! request('sort') === 'reproductive_status' ? (request('direction') ===
                  'asc' ? '▲' : '▼') : '' !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'color', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Color <span>{!! request('sort') === 'color' ? (request('direction') === 'asc' ? '▲' : '▼') : ''
                  !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'source', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Source <span>{!! request('sort') === 'source' ? (request('direction') === 'asc' ? '▲' : '▼') : ''
                  !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'created_at', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Date Added <span>{!! request('sort') === 'created_at' ? (request('direction') === 'asc' ? '▲' : '▼') :
                  '' !!}</span>
              </a>
            </th>
            <th class="py-2 px-4 text-left">
              <a href="{{ request()->fullUrlWithQuery(['sort' => 'updated_at', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}"
                class="text-blue-500 hover:underline hover:text-blue-600 flex items-center gap-1 whitespace-nowrap">
                Updated At <span>{!! request('sort') === 'updated_at' ? (request('direction') === 'asc' ? '▲' : '▼') :
                  '' !!}</span>
              </a>
            </th>
          </tr>
        </thead>

        <tbody>
          @foreach($pets as $pet)
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="py-2 px-4 text-center bg-gray-100 sticky left-[-1px]">
              <span class="flex items-center justify-center gap-4">
                <!-- Eye Icon - View Pet -->
                <a href="/services/{{ $pet->slug }}/adoption-form" target="_blank"
                  class="text-yellow-500 hover:text-yellow-600">
                  <i class="ph-fill ph-eye"></i>
                </a>

                <!-- Edit Icon - Opens Edit Modal -->
                <a href="#" class="text-blue-500 hover:text-blue-600 edit-btn" data-id="{{ $pet->id }}"
                  data-number="{{ $pet->pet_number }}" data-name="{{ $pet->pet_name }}"
                  data-species="{{ $pet->species }}" data-age="{{ $pet->age }}" data-age-unit="{{ $pet->age_unit }}"
                  data-sex="{{ $pet->sex }}" data-repro-status="{{ $pet->reproductive_status }}"
                  data-color="{{ $pet->color }}" data-source="{{ $pet->source }}"
                  data-image="{{ asset('storage/' . $pet->image_path) }}">
                  <i class="ph-fill ph-pencil-simple"></i>
                </a>

                <!-- Delete Button (Disabled if pet is in an adoption application) -->
                @if($pet->adoptionApplication && in_array($pet->adoptionApplication->status, ['to be picked up', 'to be
                scheduled']))
                <button class="text-gray-400 cursor-not-allowed relative group" disabled>
                  <i class="ph-fill ph-trash"></i>
                  <!-- Tooltip -->
                  <span
                    class="absolute left-full -translate-x-100 mb-2 w-max px-2 py-1 text-xs text-white bg-gray-700 rounded opacity-0 group-hover:opacity-100 transition">
                    {{ $pet->adoptionApplication->status }}
                  </span>
                </button>

                @else
                <button class="text-red-500 hover:text-red-600 delete-btn" data-id="{{ $pet->id }}"
                  data-number="{{ $pet->pet_number }}">
                  <i class="ph-fill ph-trash"></i>
                </button>
                @endif
              </span>
            </td>


            <td class="py-2 px-4 text-center">{{ $pet->id }}</td>

            <td class="py-2 px-4">
              <a href="/services/{{ $pet->slug }}/adoption-form"
                class="text-black p-2 text-blue-500 hover:text-blue-600 hover:underline whitespace-nowrap"
                target="_blank">
                #{{ $pet->pet_number }}
              </a>
            </td>

            <td class="py-2 px-4">{{ ucwords($pet->pet_name) }}</td>

            <td class="py-2 px-4">
              <img src="{{ asset('storage/' . $pet->image_path) }}" alt="Pet Image"
                class="w-12 h-12 rounded-full object-cover">
            </td>
            <td class="py-2 px-4 whitespace-nowrap">{{ ucfirst($pet->species) }}</td>
            <td class="py-2 px-4 whitespace-nowrap">{{ $pet->age }} {{ $pet->age == 1 ? Str::singular($pet->age_unit) :
              Str::plural($pet->age_unit) }}</td>
            <td class="py-2 px-4 whitespace-nowrap">{{ ucfirst($pet->sex) }}</td>
            <td class="py-2 px-4 whitespace-nowrap">{{ ucfirst($pet->reproductive_status) }}</td>
            <td class="py-2 px-4 whitespace-nowrap">{{ ucfirst($pet->color) }}</td>
            <td class="py-2 px-4 whitespace-nowrap">{{ ucfirst($pet->source) }}</td>
            <td class="py-2 px-4 whitespace-nowrap">{{ $pet->created_at->format('M d, Y h:i A') }}</td>
            <td class="py-2 px-4 whitespace-nowrap">{{ $pet->updated_at->format('M d, Y h:i A') }}</td>
          </tr>
          @endforeach
        </tbody>

      </table>
      @endif
    </div>


    <!-- Pagination -->
    <div class="mt-4">
      {{ $pets->links() }}
      <!-- Laravel default pagination links -->
    </div>


  </div>

  <!-- Add a New Pet Modal (Initially Hidden) -->
  <div id="modal" class="fixed inset-0 px-1 flex items-center justify-center bg-black bg-opacity-50 z-50 
    {{ session('modal_open') === 'add' ? '' : 'hidden' }}">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md max-h-[90vh] overflow-hidden relative flex flex-col">
      <!-- Close Button -->
      <button id="closeModal" class="absolute top-3 right-3 text-gray-600 hover:text-black">
        <i class="ph-bold ph-x"></i>
      </button>

      <!-- Scrollable Content -->
      <div class="flex flex-col overflow-y-auto p-2 space-y-4 flex-grow">
        <!-- Form Title -->
        <h2 class="text-xl font-semibold text-gray-800">Add a New Pet</h2>

        <!-- Image Preview -->
        <div class="flex justify-center relative">
          <p id="imagePlaceholder" class="absolute text-gray-500 text-sm">Image preview here...</p>
          <img id="imagePreview" src="" class="w-full h-auto object-cover rounded-lg border border-gray-300 hidden"
            alt="Pet Image">
        </div>

        <!-- Form Fields -->
        <form method="POST" action="/admin/pet-profiles" enctype="multipart/form-data" class="space-y-4 relative">
          @csrf

          <div>
            <label class="block text-gray-700 text-sm font-medium">Image</label>
            <input type="file" class="w-full border rounded-md" name="image" id="imageInput" required>
            <x-form-error name="image" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Pet No.</label>
            <input type="number" name="pet_number" placeholder="Pet No."
              class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" value="{{ old('pet_number') }}"
              required>
            <x-form-error name="pet_number" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Pet Name (If Any)</label>
            <input type="text" name="pet_name" placeholder="Type &quot;N/A&quot; if none"
              class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" value="{{ old('pet_name') }}"
              required>
            <x-form-error name="pet_name" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Species</label>
            <select name="species" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
              <option value="feline" {{ old('species')==='feline' ? 'selected' : '' }}>Feline</option>
              <option value="canine" {{ old('species')==='canine' ? 'selected' : '' }}>Canine</option>
            </select>
            <x-form-error name="species" />
          </div>

          <div class="flex space-x-2">
            <div class="w-1/2">
              <label class="block text-gray-700 text-sm font-medium">Age</label>
              <input type="number" name="age" placeholder="Age"
                class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" value="{{ old('age') }}" required>
              <x-form-error name="age" />
            </div>
            <div class="w-1/2">
              <label class="block text-gray-700 text-sm font-medium">Unit</label>
              <select name="age_unit" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
                <option value="months" {{ old('age_unit')==='months' ? 'selected' : '' }}>Months</option>
                <option value="years" {{ old('age_unit')==='years' ? 'selected' : '' }}>Years</option>
                <option value="weeks" {{ old('age_unit')==='weeks' ? 'selected' : '' }}>Weeks</option>
              </select>
              <x-form-error name="age_unit" />
            </div>
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Sex</label>
            <select name="sex" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
              <option value="male" {{ old('sex')==='male' ? 'selected' : '' }}>Male</option>
              <option value="female" {{ old('sex')==='female' ? 'selected' : '' }}>Female</option>
            </select>
            <x-form-error name="sex" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Reproductive Status</label>
            <select name="reproductive_status" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500"
              required>
              <option value="intact" {{ old('reproductive_status')==='intact' ? 'selected' : '' }}>Intact</option>
              <option value="neutered" {{ old('reproductive_status')==='neutered' ? 'selected' : '' }}>Neutered</option>
              <option value="unknown" {{ old('reproductive_status')==='unknown' ? 'selected' : '' }}>Unknown</option>
            </select>
            <x-form-error name="reproductive_status" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Color</label>
            <select name="color" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
              <option value="black" {{ old('color')==='black' ? 'selected' : '' }}>Black</option>
              <option value="white" {{ old('color')==='white' ? 'selected' : '' }}>White</option>
              <option value="gray" {{ old('color')==='gray' ? 'selected' : '' }}>Gray</option>
              <option value="brown" {{ old('color')==='brown' ? 'selected' : '' }}>Brown</option>
              <option value="orange" {{ old('color')==='orange' ? 'selected' : '' }}>Orange</option>
              <option value="brindle" {{ old('color')==='brindle' ? 'selected' : '' }}>Brindle</option>
              <option value="calico" {{ old('color')==='calico' ? 'selected' : '' }}>Calico</option>
              <option value="tabby" {{ old('color')==='tabby' ? 'selected' : '' }}>Tabby</option>
              <option value="bi-color" {{ old('color')==='bi-color' ? 'selected' : '' }}>Bi-color</option>
              <option value="tri-color" {{ old('color')==='tri-color' ? 'selected' : '' }}>Tri-color</option>
              <option value="others" {{ old('color')==='others' ? 'selected' : '' }}>Others</option>
            </select>
            <x-form-error name="color" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Source of Pet</label>
            <select name="source" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
              <option value="surrendered" {{ old('source')==='surrendered' ? 'selected' : '' }}>Surrendered</option>
              <option value="rescued" {{ old('source')==='rescued' ? 'selected' : '' }}>Rescued</option>
              <option value="other" {{ old('source')==='other' ? 'selected' : '' }}>Other</option>
            </select>
            <x-form-error name="source" />
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-orange-500 sticky bottom-0">Add
            Pet</button>
        </form>
      </div>
    </div>
  </div>


  <!-- Edit Pet Modal -->
  @if (!$pets->isEmpty())
  <div id="editModal"
    class="fixed inset-0 px-1 flex items-center justify-center bg-black bg-opacity-50 z-50 {{ session('modal_open') === 'edit' ? '' : 'hidden' }}">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md max-h-[90vh] overflow-hidden relative flex flex-col">
      <!-- Close Button -->
      <button id="closeEditModal" class="absolute top-3 right-3 text-gray-600 hover:text-black">
        <i class="ph-bold ph-x"></i>
      </button>

      <!-- Scrollable Content -->
      <div class="flex flex-col overflow-y-auto p-2 space-y-4 flex-grow">
        <!-- Form Title -->
        <h2 class="text-xl font-semibold text-gray-800">Edit Pet</h2>

        @php
        $editPetData = session('edit_pet_data', $pet);
        // dd($editPetData->id);
        @endphp

        <!-- Image Preview -->
        <div class="flex justify-center relative">
          <p id="editImagePlaceholder" class="absolute text-gray-500 text-sm">Image preview here...</p>
          <img id="editImagePreview"
            src="{{ $editPetData->image_path ? asset('storage/' . $editPetData->image_path) : '' }}"
            class="w-full h-auto object-cover rounded-lg border border-gray-300 {{ $editPetData->image_path ? '' : 'hidden' }}"
            alt="Pet Image">
        </div>

        <!-- Form Fields -->
        <form method="POST" id="editPetForm" action="/admin/pet-profiles/{{ $pet->id }}" enctype="multipart/form-data"
          class="space-y-4 relative">
          @csrf
          @method('PATCH')

          <input type="hidden" name="id" id="editPetId" value="{{ $pet->id }}">

          <div>
            <label class="block text-gray-700 text-sm font-medium">Image</label>
            <input type="file" class="w-full border rounded-md" name="image" id="editImageInput">
            <x-form-error name="image" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Pet No.</label>
            <input type="number" name="pet_number" id="editPetNumber"
              value="{{ old('pet_number', $editPetData->pet_number) }}"
              class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
            <x-form-error name="pet_number" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Pet Name</label>
            <input type="text" name="pet_name" id="editPetName" value="{{ old('pet_name', $editPetData->pet_name) }}"
              class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500"
              placeholder="Type &quot;N/A&quot; if none" required>
            <x-form-error name="pet_name" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Species</label>
            <select name="species" id="editSpecies"
              class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
              <option value="feline" {{ old('species', $editPetData->species) == 'feline' ? 'selected' : '' }}>Feline
              </option>
              <option value="canine" {{ old('species', $editPetData->species) == 'canine' ? 'selected' : '' }}>Canine
              </option>
            </select>
            <x-form-error name="species" />
          </div>

          <div class="flex space-x-2">
            <div class="w-1/2">
              <label class="block text-gray-700 text-sm font-medium">Age</label>
              <input type="number" name="age" id="editAge" value="{{ old('age', $editPetData->age) }}"
                class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
              <x-form-error name="age" />
            </div>
            <div class="w-1/2">
              <label class="block text-gray-700 text-sm font-medium">Unit</label>
              <select name="age_unit" id="editAgeUnit"
                class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
                <option value="months" {{ old('age_unit', $editPetData->age_unit) == 'months' ? 'selected' : ''
                  }}>Months
                </option>
                <option value="years" {{ old('age_unit', $editPetData->age_unit) == 'years' ? 'selected' : '' }}>Years
                </option>
                <option value="weeks" {{ old('age_unit', $editPetData->age_unit) == 'weeks' ? 'selected' : '' }}>Weeks
                </option>
              </select>
              <x-form-error name="age_unit" />
            </div>
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Sex</label>
            <select name="sex" id="editSex" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500"
              required>
              <option value="male" {{ old('sex', $editPetData->sex) == 'male' ? 'selected' : '' }}>Male</option>
              <option value="female" {{ old('sex', $editPetData->sex) == 'female' ? 'selected' : '' }}>Female</option>
            </select>
            <x-form-error name="sex" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Reproductive Status</label>
            <select name="reproductive_status" id="editReproStatus"
              class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500" required>
              <option value="intact" {{ old('reproductive_status', $editPetData->reproductive_status) == 'intact' ?
                'selected' : ''
                }}>Intact</option>
              <option value="neutered" {{ old('reproductive_status', $editPetData->reproductive_status) == 'neutered' ?
                'selected' : ''
                }}>Neutered</option>
              <option value="unknown" {{ old('reproductive_status', $editPetData->reproductive_status) == 'unknown' ?
                'selected' : ''
                }}>Unknown</option>
            </select>
            <x-form-error name="reproductive_status" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Color</label>
            <select name="color" id="editColor" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500"
              required>
              @foreach (["black", "white", "gray", "brown", "orange", "brindle", "calico", "tabby", "bi-color",
              "tri-color",
              "others"] as $color)
              <option value="{{ $color }}" {{ old('color', $editPetData->color) == $color ? 'selected' : '' }}>
                {{ ucfirst($color) }}
              </option>
              @endforeach
            </select>
            <x-form-error name="color" />
          </div>

          <div>
            <label class="block text-gray-700 text-sm font-medium">Source of Pet</label>
            <select name="source" id="editSource" class="w-full border p-2 rounded-md focus:ring focus:ring-yellow-500"
              required>
              <option value="surrendered" {{ old('source', $editPetData->source) == 'surrendered' ?
                'selected' : ''
                }}>Surrendered</option>
              <option value="rescued" {{ old('source', $editPetData->source) == 'rescued' ? 'selected' : ''
                }}>Rescued</option>
              <option value="other" {{ old('source', $editPetData->source) == 'other' ? 'selected' : ''
                }}>Other</option>
            </select>
            <x-form-error name="source" />
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-orange-500 sticky bottom-0">Update
            Pet</button>
        </form>
      </div>
    </div>
  </div>
  @endif

  <!-- Delete Pet Modal -->
  <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
      <!-- Modal Content -->
      <h2 class="text-xl font-semibold text-gray-800">Confirm Deletion</h2>
      <p class="text-gray-600 mt-2">Are you sure you want to delete Pet#<span id="deletePetIdText"></span>?</p>

      <div class="flex justify-end mt-4 space-x-2">
        <button id="closeDeleteModal" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-400">
          Cancel
        </button>
        <form id="deletePetForm" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">
            Delete
          </button>
        </form>
      </div>
    </div>
  </div>

</x-admin-layout>