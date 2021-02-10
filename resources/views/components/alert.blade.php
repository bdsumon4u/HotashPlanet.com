@props(['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner')])

<div x-data="{{ json_encode(['show' => true, 'style' => $style, 'message' => $message]) }}"
     :class="{ 'alert-success bg-success': style == 'success', 'alert-danger bg-danger': style == 'danger' }"
     style="display: none;"
     class="alert mb-0"
     role="alert"
     x-show="show && message"
     x-init="
                document.addEventListener('banner-message', event => {
                    style = event.detail.style;
                    message = event.detail.message;
                    show = true;
                });
            ">
    <div class="d-flex align-items-center justify-content-between flex-wrap">
        <div class="d-flex align-items-center">
            <svg width="20" height="20" class="text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <p class="ml-3 mb-0 text-white truncate" x-text="message"></p>
        </div>

        <div class="flex-shrink-0 ml-sm-3">
            <button
                type="button"
                class="btn btn-default d-flex align-items-center flex-shrink-0 ml-sm-2"
                aria-label="Dismiss"
                x-on:click="show = false">
                <svg height="20" width="20" class="text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>
