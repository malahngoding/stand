<main>
    @section('title', 'Create a new account')
    <div class="absolute top-0 w-full h-full bg-black" style="background-image:url(https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/register_bg_2-4f2cb0ac523768c8c77be108a380cb0a.png);background-size:100%;background-repeat:no-repeat">
        <div class="container mx-auto px-4 h-full">
            <div class="text-black flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0">
                        <div class="rounded-t mb-0 px-6 py-6">
                            <a href="{{ route('home') }}">
                                <div
                                    style="display:flex;flex-direction:row;align-items:center;justify-content:center;height:calc(32px * {{ 1 }});width:calc(48px * {{ 1 }});border:4px solid #18191F">
                                    <div style="display:flex;flex:1;background-color:#474A57;height:100%"></div>
                                    <div
                                        style="display:flex;flex:2;border-left:4px solid #18191F;background-color:#ffffff;height:100%">
                                    </div>
                                </div>
                            </a>
                            <div class="text-center mb-3">
                                <h6 class="text-black text-sm font-bold">Create a new account</h6>
                            </div>
                            <div class="btn-wrapper text-center"><button
                                    class="bg-white active:bg-black text-black font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                    type="button" style="transition:all .15s ease"><img alt="..." class="w-5 mr-1"
                                        src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgMzYgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5VSS9pY29ucy9kYXJrL2dpdGh1YjwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzLz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iVUkvaWNvbnMvZGFyay9naXRodWIiIGZpbGw9IiMxODIzNTkiPgogICAgICAgICAgICA8cGF0aCBkPSJNMTcuOTk4NTI2NywyIEM5LjE2NDM2OTY5LDIgMiw5LjE2MzM4NzQ2IDIsMTguMDAwNDkxMSBDMiwyNS4wNjk1ODQ3IDYuNTg0MDU3MjEsMzEuMDY2MDg1NSAxMi45NDIwMTc5LDMzLjE4MTgwNDIgQzEzLjc0MjUzMzUsMzMuMzI5MTM4NCAxNC4wMzQyNTUyLDMyLjgzNTA3NzggMTQuMDM0MjU1MiwzMi40MTA3NTU0IEMxNC4wMzQyNTUyLDMyLjAzMDYzMzIgMTQuMDIwNTA0LDMxLjAyNDgzMTkgMTQuMDEyNjQ2MiwyOS42ODk5ODQzIEM5LjU2MjE3MTk1LDMwLjY1NjQ5NjUgOC42MjMxNjIxNiwyNy41NDQ3OTg4IDguNjIzMTYyMTYsMjcuNTQ0Nzk4OCBDNy44OTUzMzEzNSwyNS42OTYyNDYgNi44NDYzMTIwNCwyNS4yMDQxNDk5IDYuODQ2MzEyMDQsMjUuMjA0MTQ5OSBDNS4zOTM1OTcxLDI0LjIxMjA5OTggNi45NTYzMjE1NiwyNC4yMzE3NDQ0IDYuOTU2MzIxNTYsMjQuMjMxNzQ0NCBDOC41NjIyNjQwNCwyNC4zNDQ3MDA2IDkuNDA2OTc5OTYsMjUuODgwOTA0OSA5LjQwNjk3OTk2LDI1Ljg4MDkwNDkgQzEwLjgzNDE1NywyOC4zMjU2Njk5IDEzLjE1MjIxNDYsMjcuNjE5NDQ4MSAxNC4wNjM3MjIsMjcuMjA5ODU5MSBDMTQuMjA5MDkxNywyNi4xNzY1NTU0IDE0LjYyMjYwOTcsMjUuNDcxMzE1OSAxNS4wNzkzNDU2LDI1LjA3MTU0OTIgQzExLjUyNjYyNzYsMjQuNjY3ODUzNSA3Ljc5MTIxNTIsMjMuMjk0Njk5IDcuNzkxMjE1MiwxNy4xNjM2MzMgQzcuNzkxMjE1MiwxNS40MTcyMzIgOC40MTQ5Mjk4NiwxMy45ODgwOTA1IDkuNDM4NDExMjUsMTIuODcwMzE1MiBDOS4yNzMzOTY5NywxMi40NjU2Mzc0IDguNzI0MzMxNjIsMTAuODM4MDg1OSA5LjU5NTU2NzcsOC42MzU5MzExMiBDOS41OTU1Njc3LDguNjM1OTMxMTIgMTAuOTM4MjczMSw4LjIwNTcxNTM0IDEzLjk5NDk2NjEsMTAuMjc2MjUxNiBDMTUuMjcwODgsOS45MjA2ODUxIDE2LjY0MDEwNTYsOS43NDM4ODQxIDE4LjAwMDQ5MTEsOS43MzcwMDg1IEMxOS4zNTk4OTQ0LDkuNzQzODg0MSAyMC43MjgxMzc4LDkuOTIwNjg1MSAyMi4wMDYwMTYxLDEwLjI3NjI1MTYgQzI1LjA2MDc0NDcsOC4yMDU3MTUzNCAyNi40MDE0ODU2LDguNjM1OTMxMTIgMjYuNDAxNDg1Niw4LjYzNTkzMTEyIEMyNy4yNzQ2ODYxLDEwLjgzODA4NTkgMjYuNzI1NjIwOCwxMi40NjU2Mzc0IDI2LjU2MTU4ODgsMTIuODcwMzE1MiBDMjcuNTg3MDM0NiwxMy45ODgwOTA1IDI4LjIwNTgzODEsMTUuNDE3MjMyIDI4LjIwNTgzODEsMTcuMTYzNjMzIEMyOC4yMDU4MzgxLDIzLjMxMDQxNDcgMjQuNDY0NTMyNCwyNC42NjI5NDI0IDIwLjkwMTAwOTksMjUuMDU4NzgwMiBDMjEuNDc0NjMwOSwyNS41NTI4NDA4IDIxLjk4NjM3MTYsMjYuNTI5MTc1MiAyMS45ODYzNzE2LDI4LjAyMTE3OTMgQzIxLjk4NjM3MTYsMzAuMTYwNDcxNSAyMS45NjY3MjcsMzEuODg2MjQ1NyAyMS45NjY3MjcsMzIuNDEwNzU1NCBDMjEuOTY2NzI3LDMyLjgzOTAwNjcgMjIuMjU1NTAyLDMzLjMzNjk5NjIgMjMuMDY2ODIyMiwzMy4xODA4MjIgQzI5LjQxOTg3MTcsMzEuMDYwMTkyMSAzNCwyNS4wNjc2MjAyIDM0LDE4LjAwMDQ5MTEgQzM0LDkuMTYzMzg3NDYgMjYuODM1NjMwMywyIDE3Ljk5ODUyNjcsMiIgaWQ9Imljb25zL2ljb24tZ2l0aHViIi8+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" />Github</button><button
                                    class="bg-white active:bg-black text-black font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                    type="button" style="transition:all .15s ease"><img alt="..." class="w-5 mr-1"
                                        src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgMzYgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5VSS9pY29ucy9jb2xvci9nb29nbGU8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcy8+CiAgICA8ZyBpZD0iU3ltYm9scyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9IlVJL2ljb25zL2NvbG9yL2dvb2dsZSI+CiAgICAgICAgICAgIDxnIGlkPSJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMi4wMDAwMDAsIDIuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMzIuNDM2NTUyNSwxNi42MDI0MDEyIEMzMi40MzY1NTI1LDE1LjQ1MTU5NjcgMzIuMzMxMzY2NSwxNC4zNDQxMjggMzIuMTM1NzIwNiwxMy4yODIwNTg1IEwxNi41NDkyNjE1LDEzLjI4MjA1ODUgTDE2LjU0OTI2MTUsMTkuNTYxNjEyOCBMMjUuNDU1NzA5NCwxOS41NjE2MTI4IEMyNS4wNzIxMzEyLDIxLjU5MDgyNTcgMjMuOTA1OTY5MiwyMy4zMDk4MDk4IDIyLjE1MzU3MDcsMjQuNDYxMzAyMiBMMjIuMTUzNTcwNywyOC41MzQxNzMzIEwyNy41MDE5Mjc0LDI4LjUzNDE3MzMgQzMwLjYzMTU2MSwyNS43MDc3MjA0IDMyLjQzNjU1MjUsMjEuNTQ2MTE0MiAzMi40MzY1NTI1LDE2LjYwMjQwMTIgTDMyLjQzNjU1MjUsMTYuNjAyNDAxMiBaIiBpZD0iU2hhcGUiIGZpbGw9IiM0Mjg1RjQiLz4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNi41NDkyNjE1LDMyLjQ2NzQwNzEgQzIxLjAxNzU2MjEsMzIuNDY3NDA3MSAyNC43NjM1ODU2LDMxLjAxMzk0MDMgMjcuNTAxOTI3NCwyOC41MzQxNzMzIEwyMi4xNTM1NzA3LDI0LjQ2MTMwMjIgQzIwLjY3MTg1MDgsMjUuNDM1MzI0NCAxOC43NzU2OTgyLDI2LjAxMTA3MDYgMTYuNTQ5MjYxNSwyNi4wMTEwNzA2IEMxMi4yMzg3Mzk5LDI2LjAxMTA3MDYgOC41OTA4ODk5NCwyMy4xNTU3MjcyIDcuMjg5Mzg4NywxOS4zMTgxMDcyIEwxLjc2MDExMjEzLDE5LjMxODEwNzIgTDEuNzYwMTEyMTMsMjMuNTI0NDI0OSBDNC40ODMwMjY2NCwyOC44Mjk5NTY5IDEwLjA3OTYyMjIsMzIuNDY3NDA3MSAxNi41NDkyNjE1LDMyLjQ2NzQwNzEgTDE2LjU0OTI2MTUsMzIuNDY3NDA3MSBaIiBpZD0iU2hhcGUiIGZpbGw9IiMzNEE4NTMiLz4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik03LjI4OTM4ODcsMTkuMzE4MTA3MiBDNi45NTg0MDM0NywxOC4zNDQwODUgNi43NzA0NzExOCwxNy4zMDMzMzk1IDYuNzcwNDcxMTgsMTYuMjMzNzAzNSBDNi43NzA0NzExOCwxNS4xNjQwNjc2IDYuOTU4NDAzNDcsMTQuMTIzMzIyMSA3LjI4OTM4ODcsMTMuMTQ5Mjk5OSBMNy4yODkzODg3LDguOTQyOTgyMTkgTDEuNzYwMTEyMTMsOC45NDI5ODIxOSBDMC42Mzk1MzA3ODMsMTEuMTM0NTMyMiAwLDEzLjYxNDI5OTIgMCwxNi4yMzM3MDM1IEMwLDE4Ljg1MzEwNzkgMC42Mzk1MzA3ODMsMjEuMzMyODc0OSAxLjc2MDExMjEzLDIzLjUyNDQyNDkgTDcuMjg5Mzg4NywxOS4zMTgxMDcyIEw3LjI4OTM4ODcsMTkuMzE4MTA3MiBaIiBpZD0iU2hhcGUiIGZpbGw9IiNGQkJDMDUiLz4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNi41NDkyNjE1LDYuNDU2MzM2NSBDMTguOTc5MDU3Nyw2LjQ1NjMzNjUgMjEuMTYwNjE1LDcuMjc1NTg4MjQgMjIuODc1ODQ3OCw4Ljg4MzgyNTQ4IEwyNy42MjI1NDA3LDQuMjI3NjQxNjEgQzI0Ljc1NTg3MiwxLjYwODkyNTExIDIxLjAwOTg0ODUsMCAxNi41NDkyNjE1LDAgQzEwLjA4MDMyMzUsMCA0LjQ4MzAyNjY0LDMuNjM4MTM4MDUgMS43NjAxMTIxMyw4Ljk0Mjk4MjE5IEw3LjI4OTM4ODcsMTMuMTQ5Mjk5OSBDOC41OTA4ODk5NCw5LjMxMjM2Nzc0IDEyLjIzOTQ0MTEsNi40NTYzMzY1IDE2LjU0OTI2MTUsNi40NTYzMzY1IFoiIGlkPSJTaGFwZSIgZmlsbD0iI0VBNDMzNSIvPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" />Google</button>
                            </div>
                            <hr class="mt-6 border-b-1 border-black" />
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <p class="mt-2 text-sm text-center text-black leading-5 max-w">
                                <a href="{{ route('login') }}" class="text-black text-center mb-3 font-bold">sign in to your account</a>
                            </p>
                            <form wire:submit.prevent="register">
                                <div class="relative w-full mb-3"><label for="name">Name</label><input
                                        wire:model.lazy="name" id="name" type="text"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Name" style="transition:all .15s ease" required autofocus
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                                    @error('name')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror</div>
                                <div class="relative w-full mb-3"><label for="email">Email</label><input
                                        wire:model.lazy="email" id="email" type="email"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Email" style="transition:all .15s ease" required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />@error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror</div>
                                <div class="relative w-full mb-3"><label for="password">Password</label><input
                                        wire:model.lazy="password" id="password" type="password"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Password" style="transition:all .15s ease" required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />@error('password')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror</div>
                                <div class="relative w-full mb-3"><label for="password_confirmation">Confirm
                                        Password</label><input wire:model.lazy="passwordConfirmation"
                                        id="password_confirmation" type="password"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Confirm Password" style="transition:all .15s ease" required
                                        class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                {{-- <div><label class="inline-flex items-center cursor-pointer"><input type="checkbox" id="customCheckLogin" class="form-checkbox text-gray-800 ml-1 w-5 h-5" style="transition:all .15s ease"/><span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span></label></div> --}}
                                <div class="text-center mt-6"><button
                                        class="bg-blue text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                        type="submit" style="transition:all .15s ease">Register</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
