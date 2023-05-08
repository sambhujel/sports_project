<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Details of Your Fields ad You') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and Field Details.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="phone" value="{{ __('Phone') }}" />
            <x-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone" autocomplete="phone" />
            <x-input-error for="phone" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="DOB" value="{{ __('DOB') }}" />
            <x-input id="DOB" type="date"  class="mt-1 block w-full" wire:model.defer="state.DOB" autocomplete="DOB" />
            <x-input-error for="DOB" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="address" value="{{ __('Address') }}" />
            <x-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" autocomplete="address" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="sport" value="{{ __('Sports') }}" />
            <select id="sport" class="mt-1 block w-full" wire:model.defer="state.sport">
                <option value="">>>Select<<</option>
                <option value="Football">Football</option>
                <option value="Basketball">Basketball</option>
                <option value="Tennis">Tennis</option>
                <option value="Bedminton">Bedminton</option>
            </select>
            <x-input-error for="price" class="mt-2" />
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-label for="price" value="{{ __('Price Nu:') }}" />
            <x-input id="price" type="number" step="0.01" class="mt-1 block w-full" wire:model.defer="state.price" autocomplete="price" />
            <x-input-error for="price" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time" value="{{ __('Opening:') }}" />
            <x-input id="time" type="time"  class="mt-1 block w-full" wire:model.defer="state.time" autocomplete="time" />
            <x-input-error for="time" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="tim" value="{{ __('Closing:') }}" />
            <x-input id="tim" type="time"  class="mt-1 block w-full" wire:model.defer="state.tim" autocomplete="tim" />
            <x-input-error for="tim" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="description" value="{{ __('Description:') }}" />
            <textarea id="description" class="mt-1 block w-full" wire:model.defer="state.description"></textarea>
            <x-input-error for="description" class="mt-2" />
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-label for="images" value="{{ __('Images') }}" />
            <x-input id="images" type="file" class="mt-1 block w-full" wire:model.defer="state.images" multiple />
            <x-input-error for="images" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time1" value="{{ __('8-9 am') }}" />
            <select id="time1" class="mt-1 block w-full" wire:model.defer="state.time1">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time2" value="{{ __('9-10 am') }}" />
            <select id="time2" class="mt-1 block w-full" wire:model.defer="state.time2">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time3" value="{{ __('10-11 am') }}" />
            <select id="time3" class="mt-1 block w-full" wire:model.defer="state.time3">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time4" value="{{ __('11 am - 12 pm') }}" />
            <select id="time4" class="mt-1 block w-full" wire:model.defer="state.time4">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time5" value="{{ __('12-1 pm') }}" />
            <select id="time5" class="mt-1 block w-full" wire:model.defer="state.time5">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time6" value="{{ __('1-3 pm') }}" />
            <select id="time6" class="mt-1 block w-full" wire:model.defer="state.time6">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time7" value="{{ __('3-4 pm') }}" />
            <select id="time7" class="mt-1 block w-full" wire:model.defer="state.time7">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time8" value="{{ __('4-5 pm') }}" />
            <select id="time8" class="mt-1 block w-full" wire:model.defer="state.time8">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="time9" value="{{ __('5-6 pm') }}" />
            <select id="time9" class="mt-1 block w-full" wire:model.defer="state.time9">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="times" value="{{ __('6-7 pm') }}" />
            <select id="times" class="mt-1 block w-full" wire:model.defer="state.times">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="times1" value="{{ __('7-8 pm') }}" />
            <select id="times1" class="mt-1 block w-full" wire:model.defer="state.times1">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="times2" value="{{ __('9-10 pm') }}" />
            <select id="times2" class="mt-1 block w-full" wire:model.defer="state.times2">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="times3" value="{{ __('10-11 pm') }}" />
            <select id="times3" class="mt-1 block w-full" wire:model.defer="state.times3">
            <option value="">--select--</option>
                <option value="Open">Open</option>
                <option value="Booked">Booked</option>
            </select>
        </div>
    </x-slot>


    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
