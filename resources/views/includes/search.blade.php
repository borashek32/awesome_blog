<style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
<style>
    .min-w-80 {
        min-width: 20rem;
    }
    .resize::-webkit-resizer,
    .resize-x::-webkit-resizer,
    .resize-y::-webkit-resizer {
        background-color: transparent;
    }
    .resize:after,
    .resize-x:after,
    .resize-y:after {
        display: block;
        position: absolute;
        bottom: 5px;
        right: 5px;
        width: 24px;
        height: 24px;
        content: '\F045D';
        font: normal normal normal 24px/1 "Material Design Icons";
        font-size: 24px;
        text-rendering: auto;
        line-height: 24px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: rgba(0,0,0,0.3);
    }
</style>

<div class="relative mt-1 mb-6">
    <input type="text" id="password" class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-500 transition-colors" placeholder="Search...">
    <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors"><i class="mdi mdi-magnify"></i></button>
</div>
