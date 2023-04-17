@extends('layouts.master')

@section('content')
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800 text-center">
            <style>
                .map-container {
                    height: 700px;
                    z-index: -1;
                }
            </style>

            <div class="px-6 py-12 md:px-12">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 items-center">
                        <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
                            <div class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
                                style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
                                <h2 class="text-3xl font-bold mb-12">Contact us</h2>
                                <form class="w-full">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                First Name
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="grid-first-name" type="text" placeholder="Jane">
                                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-last-name">
                                                Last Name
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" type="text" placeholder="Doe">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">
                                                E-mail
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="email" type="email">
                                            <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">
                                                Message
                                            </label>
                                            <textarea
                                                class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                                                id="message"></textarea>
                                            <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by
                                                resize-none / resize-y / resize-x / resize</p>
                                        </div>
                                    </div>
                                    <div class="md:flex md:items-center">
                                        <div class="md:w-1/3">
                                            <button
                                                class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                                type="button">
                                                Send
                                            </button>
                                        </div>
                                        <div class="md:w-2/3"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="md:mb-12 lg:mb-0">
                            <div class="j2x7_17hqRVmwte_tWFa czGmoDY2lMQ_0SyND3x7">
                                <h3
                                    class="_9OKVeTXzfSwD_NYO6_G VwrSTsh__so52zqMJvws LYMps1kO2vF8HBymW3az g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    Points of contact</h3>
                                <h4
                                    class="RSigS__XSy90w_LER1Bw _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    U.S. Flowbite</h4>
                                <address class="MxG1ClE4KPrIvlL5_Q5x oTkHpmOXEgQRdykOe3sq K1PPCJwslha8GUIvV_Cr non-italic">
                                    11350 McCormick Rd, EP III, Suite 200,
                                    <br>Hunt Valley, MD 21031
                                </address>
                                <h4
                                    class="KgBTWt39fdiAC__YVNt8 RSigS__XSy90w_LER1Bw _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    Information &amp; Sales</h4>
                                <p
                                    class="MxG1ClE4KPrIvlL5_Q5x _A6LflweZRUwrcL6M2Tk text-primary-600 _5zvlMLkN1qETxEl3IhT dark:text-primary-500">
                                    <a href="#">sales@flowbite.com</a></p>
                                <h4
                                    class="KgBTWt39fdiAC__YVNt8 RSigS__XSy90w_LER1Bw _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    Support</h4>
                                <p
                                    class="MxG1ClE4KPrIvlL5_Q5x _A6LflweZRUwrcL6M2Tk text-primary-600 _5zvlMLkN1qETxEl3IhT dark:text-primary-500">
                                    <a href="#">support@flowbite.com</a></p>
                                <h4
                                    class="KgBTWt39fdiAC__YVNt8 RSigS__XSy90w_LER1Bw _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    Verification of Employment</h4>
                                <p
                                    class="MxG1ClE4KPrIvlL5_Q5x _A6LflweZRUwrcL6M2Tk text-primary-600 _5zvlMLkN1qETxEl3IhT dark:text-primary-500">
                                    <a href="#">hr@flowbite.com</a></p>
                                <h3
                                    class="wNjn9N5eFVIJ_nJIDqmA _9OKVeTXzfSwD_NYO6_G VwrSTsh__so52zqMJvws LYMps1kO2vF8HBymW3az g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    Our offices around the world</h3>
                                <h4
                                    class="KgBTWt39fdiAC__YVNt8 RSigS__XSy90w_LER1Bw _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    Canada</h4>
                                <address class="MxG1ClE4KPrIvlL5_Q5x oTkHpmOXEgQRdykOe3sq K1PPCJwslha8GUIvV_Cr non-italic">
                                    5333 Avenue Casgrain #1201,
                                    <br>Montréal, QC H2T 1X3
                                </address>
                                <h4
                                    class="KgBTWt39fdiAC__YVNt8 RSigS__XSy90w_LER1Bw _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    Germany</h4>
                                <address class="MxG1ClE4KPrIvlL5_Q5x oTkHpmOXEgQRdykOe3sq K1PPCJwslha8GUIvV_Cr non-italic">
                                    Neue Schönhauser Str. 3-5,
                                    <br>10178 Berlin
                                </address>
                                <h4
                                    class="KgBTWt39fdiAC__YVNt8 RSigS__XSy90w_LER1Bw _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">
                                    France</h4>
                                <address class="MxG1ClE4KPrIvlL5_Q5x oTkHpmOXEgQRdykOe3sq K1PPCJwslha8GUIvV_Cr non-italic">
                                    266 Place Ernest Granier,
                                    <br>34000 Montpellier
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-container relative shadow-lg rounded-lg">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    class="left-0 top-0 h-full w-full absolute rounded-lg" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
@endsection
