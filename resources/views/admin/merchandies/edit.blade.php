<x-admin.app title="Merchandies | Edit">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Edit Merchandies</h1>

        <form method="POST" action="{{ route('admin.merchandies.update',$merchandies)}}" enctype="multipart/form-data">
            @csrf

            @method('PATCH')
            
            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6">

                        <x-form.group label="Title" for="title">
                            <x-form.input type="text" id="title" name="title" value="{{ old('title') }}"/>
                            <x-form.error name="title" />
                        </x-form.group>
                        
                        <x-form.group label="Price" for="price">
                            <x-form.input type="text" id="price" name="price" value="{{ old('price') }}" placeholder="Rs.1200"/>
                            <x-form.error name="price" />
                        </x-form.group>
                        
                        <x-form.group label="Description" for="description">
                            <x-form.ckeditor type="text" id="description" name="description" value="{{ old('description') }}" placeholder="Sweatshirt"/>
                            <x-form.error name="description" />
                        </x-form.group>
                        <x-form.group label="Form_link" for="form_link">
                            <x-form.input type="text" id="form_link" name="form_link" value="{{ old('form_link') }}" placeholder="www.docs"/>
                            <x-form.error name="form_link" />
                        </x-form.group>

                        <x-form.group label="Image" for="image">
                            <input type="file" id="image" name="image" accept="image/*" class="@error('image') border-red-600 @enderror">
                            <x-form.error name="image" />
                        </x-form.group>
                        
                    </div>

                
                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">
                    <x-button.secondary link="{{ route('admin.merchandies.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Update</x-button.primary>
                </div>

            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
