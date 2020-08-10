<div>

    @if(session()->has('message'))
    <div class="bg-green-200 border-l-4 border-green-400 text-orange-dark p-2" role="alert">
        <p class="font-bold">Please Note</p>
        <p> <h2>{{session('message')}}</h2></p>
    </div>
    @endif


    <div class="mt-10">
        <div class="container-inner mx-auto py-16 pb-8 text-center textl-xl">
            <h2 class="text-2xl font-bold mb-8">Join my Newsletter</h2>
            <div class="w-4/5 mx-auto mb-8">
                <p class="mb-8 text-lg text-gray-600 sm:text-lg">Keep up to date with any new courses I’m working on
                    and receive exclusive offers and discounts when they launch.
                </p>
                <form  wire:submit.prevent="subscribe" data-sv-form="741879" data-uid="91563dbc84" data-format="inline"
                      data-version="5"
                      data-options="{&quot;settings&quot;:{&quot;after_subscribe&quot;:{&quot;action&quot;:&quot;message&quot;,&quot;success_message&quot;:&quot;Success! Now check your email to confirm your subscription.&quot;,&quot;redirect_url&quot;:&quot;&quot;},&quot;modal&quot;:{&quot;trigger&quot;:null,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:null,&quot;devices&quot;:null,&quot;show_once_every&quot;:null},&quot;recaptcha&quot;:{&quot;enabled&quot;:false},&quot;return_visitor&quot;:{&quot;action&quot;:&quot;show&quot;,&quot;custom_content&quot;:&quot;&quot;},&quot;slide_in&quot;:{&quot;display_in&quot;:null,&quot;trigger&quot;:null,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:null,&quot;devices&quot;:null,&quot;show_once_every&quot;:null}}}"
                      class="seva-form formkit-form" min-width="">
                    <div class="flex flex-col sm:flex-row">
                        <input type="email" wire:model="email"  placeholder="Your email address"
                               class="font-sans flex-1 bg-background-form rounded sm:rounded-r-none px-4 py-4 leading-normal border border-border-color-primary sm:border-r-0 shadow outline-none focus:border-blue z-10">
                        <button  type="submit" wire:loading.attr="disabled" wire:target="submit"
                                class="flex-2 w-40 uppercase bg-indigo-600 text-white rounded sm:rounded-l-none text-lg py-3 px-8 tracking-wide shadow focus:outline-none hover:bg-blue-dark focus:bg-blue-dark z-10 w-full sm:w-auto mt-4 sm:mt-0">
                            <span>Subscribe</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>
