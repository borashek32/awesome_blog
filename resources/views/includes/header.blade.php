@section('styles')
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>

    <style>
        .-z-1 {
            z-index: -1;
        }

        .origin-0 {
            transform-origin: 0%;
        }

        input:focus ~ label,
        input:not(:placeholder-shown) ~ label,
        textarea:focus ~ label,
        textarea:not(:placeholder-shown) ~ label,
        select:focus ~ label,
        select:not([value='']):valid ~ label {
            /* @apply transform; scale-75; -translate-y-6; */
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
            skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-scale-x: 0.75;
            --tw-scale-y: 0.75;
            --tw-translate-y: -1.5rem;
        }

        input:focus ~ label,
        select:focus ~ label {
            /* @apply text-black; left-0; */
            --tw-text-opacity: 1;
            color: rgba(0, 0, 0, var(--tw-text-opacity));
            left: 0px;
        }
    </style>
@endsection

<div class="text-center text-white px-6 py-12 mb-6">
    <h1 class=" text-xl md:text-4xl pb-4">
        Blog
    </h1>

    <a href="#" class="px-2 text-xs md:pl-0 text-white no-underline">About Us</a>

    <p class="leading-loose text-gray-dark">
        Catch up on the latest news and updates.
    </p>

    <div>
        <button onclick="openModal()" class='bg-blue-500 text-white p-2 rounded text-md'>
            Message us
        </button>
    </div>
</div>

<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
     style="background: rgba(0,0,0,.7);">
    <div
        class="border p-2 border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md
                mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content text-left px-6">
            <div class="bg-white rounded flex justify-center items-center flex-col">
                <img src="img/logo.png" width="60px" alt="logo">
                <p class="text-xs">Awesome blog</p>
                <h3 class="text-lg">Contact us</h3>
            </div>

            <form class="" action="{{ route('contact') }}" method="POST">
                @csrf
                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                </div>

                <div class="mt-6">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                </div>

                <div class="mt-6">
                    <x-jet-label for="message" value="{{ __('Message') }}" />
                    <textarea class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border
                              border-gray-300 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              id="message" type="text" placeholder="Message..." name="message"></textarea>
                    <label for="message" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">Message...
                    </label>
                </div>

                <!--Footer-->
                <div class="flex justify-end pt-2 mt-2">
                    <button class="focus:outline-none mr-4 modal-close px-2 bg-gray-400 p-2 rounded-lg text-white hover:bg-gray-300">
                        <a href="{{ route('home') }}">
                            Cancel
                        </a>
                    </button>

                    <button class="focus:outline-none modal-close px-2 bg-blue-500 p-2 rounded-lg text-white hover:bg-blue-300">
                        Confirm
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        const modal = document.querySelector('.main-modal');
        const closeButton = document.querySelectorAll('.modal-close');

        const modalClose = () => {
            modal.classList.remove('fadeIn');
            modal.classList.add('fadeOut');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 500);
        }

        const openModal = () => {
            modal.classList.remove('fadeOut');
            modal.classList.add('fadeIn');
            modal.style.display = 'flex';
        }

        for (let i = 0; i < closeButton.length; i++) {

            const elements = closeButton[i];

            elements.onclick = (e) => modalClose();

            modal.style.display = 'none';

            window.onclick = function (event) {
                if (event.target == modal) modalClose();
            }
        }
    </script>

    <script>
        'use strict'

        document.getElementById('button').addEventListener('click', toggleError)
        const errMessages = document.querySelectorAll('#error')

        function toggleError() {
            // Show error message
            errMessages.forEach((el) => {
                el.classList.toggle('hidden')
            })

            // Highlight input and label with red
            const allBorders = document.querySelectorAll('.border-gray-200')
            const allTexts = document.querySelectorAll('.text-gray-500')
            allBorders.forEach((el) => {
                el.classList.toggle('border-red-600')
            })
            allTexts.forEach((el) => {
                el.classList.toggle('text-red-600')
            })
        }
    </script>
@endsection
