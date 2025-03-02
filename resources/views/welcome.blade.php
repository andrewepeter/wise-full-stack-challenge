<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WiseJobs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.ts'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px grey0d;--shadow-xs:0 1px 2px 0 grey0d;--shadow-sm:0 1px 3px 0 grey1a,0 1px 2px -1px grey1a;--shadow-md:0 4px 6px -1px grey1a,0 2px 4px -2px grey1a;--shadow-lg:0 10px 15px -3px grey1a,0 4px 6px -4px grey1a;--shadow-xl:0 20px 25px -5px grey1a,0 8px 10px -6px grey1a;--shadow-2xl:0 25px 50px -12px grey40;--inset-shadow-2xs:inset 0 1px grey0d;--inset-shadow-xs:inset 0 1px 1px grey0d;--inset-shadow-sm:inset 0 2px 4px grey0d;--drop-shadow-xs:0 1px 1px grey0d;--drop-shadow-sm:0 1px 2px grey26;--drop-shadow-md:0 3px 3px grey1f;--drop-shadow-lg:0 4px 4px grey26;--drop-shadow-xl:0 9px 7px grey1a;--drop-shadow-2xl:0 25px 25px grey26;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,grey08),0px 1px 2px 0px var(--tw-shadow-color,grey0f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="flex items-center justify-center h-full w-full">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="100%" height="auto" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve" preserveAspectRatio="xMidYMid meet"> 
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M739.890442,490.525146 
                            C739.099976,492.985382 737.528137,493.373169 735.503235,493.525452 
                            C726.513733,494.201355 717.518982,493.940033 708.525330,493.890106 
                            C683.202209,493.749512 657.878906,493.451416 632.556702,493.538330 
                            C627.635010,493.555237 625.596558,491.889313 624.291626,487.224640 
                            C620.140747,472.386932 617.739563,457.267334 617.024902,441.956726 
                            C616.484680,430.382965 618.914307,419.111450 623.638977,408.435852 
                            C624.041687,407.525970 624.533691,406.650299 625.052063,405.800110 
                            C625.201294,405.555511 625.588135,405.455841 626.461304,404.934021 
                            C632.547729,410.182495 639.721130,414.185852 648.212524,417.118866 
                            C640.978638,425.154480 639.858704,433.523254 645.926819,441.685791 
                            C652.633301,450.706970 662.029785,451.280975 672.293213,447.838867 
                            C675.497620,454.952942 678.604248,461.849976 682.002380,469.394104 
                            C686.139954,462.237244 688.528076,455.166168 691.826904,447.922546 
                            C703.119141,451.509216 713.096680,450.040436 719.369019,438.937805 
                            C723.627991,431.398865 721.319397,424.477997 715.051941,417.781433 
                            C723.323608,414.018860 731.050110,410.257385 737.892761,403.788971 
                            C753.686829,432.704346 749.595215,461.365356 739.890442,490.525146 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M613.973389,414.000000 
                            C614.008667,438.475647 614.055420,462.451263 614.062805,486.426880 
                            C614.064941,493.423920 614.013489,493.385498 606.798340,493.380219 
                            C594.810486,493.371429 582.819946,493.281281 570.836487,493.522491 
                            C567.172607,493.596252 565.778564,492.567322 565.781921,488.809753 
                            C565.816895,450.181824 565.769165,411.553680 565.638062,372.925995 
                            C565.625732,369.296692 566.910034,367.793457 570.550659,367.816132 
                            C583.370667,367.896057 596.193237,367.960236 609.010986,367.768219 
                            C613.836853,367.695953 613.932678,370.810272 613.948730,374.040100 
                            C614.014099,387.193115 613.972229,400.346649 613.973389,414.000000 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M258.015381,573.863159 
                            C255.096100,565.691956 252.310257,557.887085 249.489410,549.984253 
                            C247.488373,550.816589 247.502640,552.473694 247.061981,553.805115 
                            C242.667740,567.082214 238.139267,580.319031 234.037903,593.686584 
                            C232.774857,597.803223 230.714798,599.231506 226.562912,599.100769 
                            C209.691544,598.569763 213.558228,601.742859 207.697388,585.627625 
                            C199.845428,564.037415 192.278931,542.343384 184.605011,520.688538 
                            C183.947327,518.832642 183.052475,517.010681 183.417053,514.132385 
                            C189.504700,513.443176 195.737656,513.599731 201.935577,514.014343 
                            C204.333817,514.174744 204.577682,516.773010 205.194214,518.602478 
                            C210.770355,535.148926 216.294449,551.712891 221.991623,568.743469 
                            C223.765289,567.310303 224.058182,565.507996 224.645538,563.927490 
                            C230.329437,548.632446 236.160538,533.388306 241.541977,517.987122 
                            C243.152176,513.378906 246.275726,513.669983 249.812912,513.688416 
                            C253.321838,513.706665 256.516846,513.295288 258.054871,517.984253 
                            C262.931274,532.851318 268.260803,547.569946 273.424744,562.342529 
                            C274.024261,564.057556 274.683685,565.751709 275.350830,567.551270 
                            C277.345184,566.914185 277.158752,565.172974 277.610931,563.931152 
                            C283.021881,549.070251 288.504181,534.232666 293.651031,519.279968 
                            C295.167206,514.875122 297.578339,513.198425 302.117981,513.700500 
                            C306.522308,514.187622 311.045380,513.126038 315.247894,514.286072 
                            C316.250488,516.129639 315.439575,517.523376 314.936646,518.884155 
                            C305.588806,544.178955 296.169739,569.447510 286.894318,594.768799 
                            C285.736298,597.930115 283.991394,599.234558 280.638123,599.122742 
                            C265.252289,598.609375 267.882751,601.299622 262.560120,586.448120 
                            C261.099243,582.371887 259.619720,578.302246 258.015381,573.863159 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M507.679565,428.999878 
                            C507.676025,417.012512 507.841553,405.521362 507.583221,394.039764 
                            C507.483582,389.610565 509.319153,388.067780 513.391602,388.064178 
                            C525.377930,388.053558 537.365173,388.040894 549.350098,387.883148 
                            C553.871277,387.823608 555.381042,389.767700 555.361145,394.241058 
                            C555.251648,418.879852 555.388123,443.519684 555.415527,468.159180 
                            C555.423096,474.968231 556.028137,481.756989 555.642151,488.592010 
                            C555.452637,491.948914 554.692749,493.413116 551.125000,493.378357 
                            C538.307068,493.253448 525.485901,493.237762 512.668640,493.395050 
                            C508.605377,493.444916 507.597595,491.621704 507.618408,487.935272 
                            C507.728455,468.457306 507.675751,448.978424 507.679565,428.999878 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M744.017944,566.393982 
                            C746.888245,581.397888 740.662659,591.690002 726.323792,596.235718 
                            C719.251343,598.477905 711.889893,598.676453 704.602722,598.961487 
                            C695.292847,599.325745 685.958130,599.000061 676.638672,599.193665 
                            C672.651306,599.276550 670.899658,597.890381 670.911011,593.732300 
                            C670.979675,568.594238 670.942993,543.455627 670.833313,518.317688 
                            C670.818176,514.849548 672.166138,513.629333 675.563538,513.662048 
                            C688.547852,513.787109 701.541504,513.463440 714.516968,513.829468 
                            C728.283325,514.217834 737.566406,521.234192 739.666199,532.323547 
                            C741.261108,540.746704 737.744934,547.163330 730.382812,552.400024 
                            C736.759949,555.573364 741.954712,559.295044 744.017944,566.393982 
                        M724.357483,575.731323 
                            C726.831665,568.587341 723.515259,562.924011 715.990295,562.382324 
                            C709.042786,561.882202 702.041992,562.141968 695.065552,562.016907 
                            C692.247070,561.966309 691.267822,563.406860 691.313477,566.045044 
                            C691.376709,569.699341 691.512634,573.373901 691.217102,577.007324 
                            C690.864807,581.337830 693.026794,582.630920 696.834778,582.476807 
                            C702.145020,582.261841 707.455688,582.055664 712.766907,581.865417 
                            C717.329041,581.702026 721.182068,580.121704 724.357483,575.731323 
                        M712.357422,546.232422 
                            C713.135193,545.945068 713.946411,545.725159 714.685120,545.359009 
                            C718.534973,543.450684 720.353943,540.380371 719.803589,536.058350 
                            C719.291565,532.037842 716.253601,530.830811 712.914551,529.899231 
                            C709.978027,529.080017 706.981628,529.196838 704.014038,529.256287 
                            C689.090454,529.555176 691.424866,526.383057 691.228394,542.582520 
                            C691.226379,542.748352 691.244568,542.914795 691.235901,543.080078 
                            C691.090576,545.854126 692.510193,547.000244 695.169006,546.901917 
                            C700.632385,546.699829 706.117737,547.360779 712.357422,546.232422 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M622.609558,598.925903 
                            C609.038269,602.233521 596.049316,601.539551 583.506531,596.459351 
                            C567.072754,589.803284 557.431519,577.463501 556.029968,559.777710 
                            C554.610352,541.862732 562.207397,528.049500 577.883606,519.101440 
                            C597.234924,508.055725 623.759033,509.762390 640.716309,522.855408 
                            C665.156555,541.726196 660.752869,581.930847 632.772400,595.020386 
                            C629.616760,596.496704 626.268494,597.561401 622.609558,598.925903 
                        M580.835693,541.414795 
                            C570.576599,558.773376 578.273682,577.433167 597.750000,582.264160 
                            C602.142761,583.353821 606.677734,583.275208 611.151978,582.936462 
                            C621.446045,582.156982 629.335571,577.310303 633.328186,567.712280 
                            C637.498169,557.688049 636.854126,547.706848 629.604065,539.111206 
                            C617.683167,524.977722 593.995911,525.931824 580.835693,541.414795 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M630.989502,363.337677 
                            C632.776917,368.605286 634.829590,373.387390 638.427917,377.199799 
                            C644.332153,383.455322 650.767761,387.850525 660.362732,385.967194 
                            C675.521790,382.991699 690.749146,383.864929 706.026733,386.279724 
                            C716.804443,387.983276 723.103210,380.283356 728.645386,372.657257 
                            C731.301270,369.002594 732.828918,364.527924 734.893433,360.372559 
                            C743.324951,367.003113 745.418823,383.422607 739.473267,394.000854 
                            C733.906189,403.905579 724.693848,409.137756 714.644592,413.075409 
                            C704.916138,416.887421 695.555725,421.153259 689.152466,429.834656 
                            C686.644104,433.235443 684.718994,437.066406 682.675354,440.457306 
                            C681.142273,440.527435 680.642700,439.758972 680.347290,439.027740 
                            C674.946899,425.660889 663.412964,419.478668 651.209595,414.066467 
                            C646.649597,412.044098 641.882629,410.377594 637.579651,407.905365 
                            C618.210938,396.776978 617.985535,374.449860 628.732361,360.650177 
                            C630.397766,360.569489 630.221497,362.149658 630.989502,363.337677 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M447.901062,418.147644 
                            C447.976379,410.273346 448.209229,410.064484 455.427521,410.038452 
                            C467.244904,409.995819 479.064331,410.024078 490.878296,409.790710 
                            C495.152924,409.706329 496.902863,411.352081 496.906158,415.602325 
                            C496.924835,439.903412 497.008301,464.204742 497.188812,488.505096 
                            C497.216644,492.253998 495.636322,493.423431 492.088257,493.392242 
                            C479.272980,493.279572 466.453766,493.213348 453.641113,493.429565 
                            C449.160400,493.505188 447.995728,491.732727 448.012878,487.515045 
                            C448.106323,464.552948 447.962708,441.589874 447.901062,418.147644 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M290.531982,472.589783 
                            C274.226257,481.408356 258.242706,490.048248 241.753586,498.961456 
                            C242.014618,495.602448 244.240433,495.063385 245.746307,494.007324 
                            C289.419189,463.380798 336.466217,438.846741 384.955414,416.902496 
                            C431.867645,395.671875 479.700043,376.818146 528.774170,361.191711 
                            C551.770142,353.869202 574.816711,346.690704 598.232849,340.781982 
                            C600.136719,340.301575 601.986877,339.608398 604.257751,338.888672 
                            C601.615356,334.118134 596.083618,333.273621 593.780151,327.713104 
                            C608.221619,329.149506 622.663086,330.585907 637.104553,332.022278 
                            C637.398926,332.501526 637.693237,332.980774 637.987549,333.460052 
                            C627.709106,341.809692 618.398621,351.039673 610.500122,361.912506 
                            C609.007446,356.431610 612.740234,351.329987 611.250122,345.959839 
                            C608.308105,345.132172 605.877869,346.464111 603.410950,347.203827 
                            C566.709473,358.208496 530.793091,371.499115 494.910767,384.851562 
                            C451.379272,401.050385 407.834473,417.240112 365.256348,435.868835 
                            C339.919586,446.954193 315.065125,459.029602 290.531982,472.589783 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M444.060364,599.243286 
                            C433.584961,599.219482 433.832550,599.211426 433.505829,589.176636 
                            C432.762756,566.355042 433.077454,543.530212 432.961456,520.706848 
                            C432.927124,513.948364 433.230774,513.725159 440.052429,513.713623 
                            C456.382233,513.686096 472.713806,513.807068 489.040802,513.585693 
                            C493.269989,513.528320 495.018951,514.690918 495.082031,519.128540 
                            C495.236786,530.022705 495.399994,530.019104 484.455078,530.013000 
                            C476.123627,530.008301 467.790405,530.107056 459.461548,529.958923 
                            C455.782471,529.893494 453.943909,530.951233 454.017517,535.033386 
                            C454.290649,550.186096 452.188751,547.401123 466.174133,547.652710 
                            C471.004822,547.739624 475.839996,547.742920 480.670074,547.640564 
                            C483.727203,547.575806 484.912933,549.002075 484.683380,551.907593 
                            C483.599487,565.625122 486.629608,563.607849 473.376099,563.401123 
                            C468.378387,563.323181 463.375336,563.497803 458.380554,563.354187 
                            C455.127716,563.260620 453.904022,564.617493 454.012939,567.811157 
                            C454.582001,584.498230 451.419464,581.745667 467.802155,582.028320 
                            C475.298401,582.157776 482.798828,582.132568 490.296326,582.065308 
                            C493.854340,582.033386 495.364441,583.481445 495.313995,587.156189 
                            C495.111633,601.894470 496.510193,599.072144 483.540466,599.227722 
                            C470.545074,599.383606 457.546234,599.250183 444.060364,599.243286 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M812.524109,532.504150 
                            C805.298096,529.546448 798.168396,528.126831 790.742615,528.298218 
                            C789.581238,528.325012 788.363342,528.283142 787.273987,528.612244 
                            C783.673645,529.699768 779.276367,530.126099 778.860718,535.063171 
                            C778.483154,539.547729 782.011963,541.553711 785.418030,542.893494 
                            C790.980652,545.081604 796.764465,546.701233 802.418518,548.665344 
                            C805.402161,549.701843 808.387329,550.794617 811.235901,552.147949 
                            C820.212097,556.412537 825.919556,563.084167 825.693726,573.505859 
                            C825.476990,583.508301 820.820862,591.103271 811.897278,595.603516 
                            C798.179321,602.521484 783.797424,601.396301 769.477234,598.008423 
                            C754.860291,594.550232 754.899170,594.365906 759.417847,580.548340 
                            C759.973877,578.847900 760.069336,576.909607 761.841064,575.652039 
                            C764.527710,575.817261 766.702759,577.496521 769.117126,578.510864 
                            C778.151978,582.306641 787.368164,584.695618 797.278748,582.747498 
                            C801.561523,581.905579 804.977722,579.983337 805.585754,575.374939 
                            C806.160583,571.018372 802.981995,568.827271 799.607422,567.078552 
                            C794.394531,564.377197 788.656189,563.158997 783.118591,561.380432 
                            C778.349548,559.848816 773.710999,558.051086 769.443237,555.380066 
                            C754.703064,546.154480 755.057007,524.725586 770.501160,516.789490 
                            C786.986633,508.318298 803.735535,510.844177 820.222534,517.441406 
                            C820.924866,517.722473 821.631653,518.386230 821.987732,519.056763 
                            C822.722900,520.441162 818.840210,532.722839 817.486328,533.580688 
                            C815.680725,534.724854 814.391479,533.110413 812.524109,532.504150 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M353.851196,588.740784 
                            C355.116547,585.442017 356.421326,582.545166 357.391602,579.540283 
                            C358.513672,576.065247 360.321899,575.764893 363.403992,577.322327 
                            C372.482117,581.909973 382.043884,584.447937 392.310883,582.903687 
                            C396.227264,582.314697 399.973663,581.055786 400.727234,576.414917 
                            C401.519714,571.534668 398.209778,569.234375 394.481750,567.306702 
                            C390.160828,565.072449 385.491211,563.803894 380.885468,562.371704 
                            C376.421753,560.983826 372.064941,559.390442 367.980896,557.069519 
                            C359.534210,552.269348 355.180603,545.217163 355.700043,535.349670 
                            C356.202301,525.808594 361.364441,519.254944 369.722778,515.734497 
                            C385.942719,508.902832 402.003601,511.380829 417.724335,518.013062 
                            C418.995331,518.549316 420.166809,519.445679 419.804962,521.033875 
                            C418.801971,525.436584 417.186737,529.672607 414.984711,533.572388 
                            C413.673157,535.895142 411.711212,533.853210 410.181061,533.212036 
                            C401.612396,529.621704 392.878479,527.261963 383.487305,529.175903 
                            C379.729858,529.941650 376.119537,531.175110 375.661346,535.625854 
                            C375.246948,539.651001 378.591400,541.319519 381.467224,542.952576 
                            C385.258270,545.105347 389.498322,546.151001 393.651276,547.363098 
                            C399.105438,548.954895 404.395996,550.941528 409.329163,553.779419 
                            C417.318237,558.375183 421.922668,565.108521 421.648560,574.530579 
                            C421.354980,584.621155 416.459747,591.891846 407.332733,596.198853 
                            C395.625397,601.723572 383.402893,601.192749 371.116669,598.904785 
                            C366.037567,597.958984 361.144104,596.282104 356.449463,594.059998 
                            C354.279053,593.032776 352.693573,591.816345 353.851196,588.740784 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M438.171997,480.979187 
                            C438.033813,493.279358 438.033844,493.289825 426.075287,493.313751 
                            C415.752991,493.334412 405.427887,493.192596 395.109589,493.399292 
                            C390.969574,493.482239 389.600800,491.963501 389.637482,487.871338 
                            C389.773254,472.722473 389.735748,457.569641 389.525208,442.421631 
                            C389.467743,438.286865 390.987610,436.787933 395.038025,436.817261 
                            C407.690125,436.909027 420.345673,436.896606 432.995758,436.682770 
                            C437.021515,436.614685 438.162628,438.254547 438.129395,442.025543 
                            C438.016510,454.843811 438.140015,467.664154 438.171997,480.979187 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M506.361816,607.986938 
                            C504.981598,607.670593 504.016968,607.399109 503.034637,607.230835 
                            C498.878662,606.518677 497.509888,604.559448 499.963043,600.707092 
                            C500.673798,599.590942 501.331390,598.382446 501.711273,597.125061 
                            C502.841034,593.385559 504.842041,592.060669 509.056976,592.532349 
                            C517.980713,593.531189 521.622009,589.939697 521.654785,580.801880 
                            C521.727478,560.491150 521.803223,540.178528 521.569458,519.870178 
                            C521.513550,515.014038 523.144348,513.597717 527.869202,513.617432 
                            C542.277710,513.677673 542.284912,513.511169 542.267273,528.142639 
                            C542.245422,546.289185 541.891174,564.442383 542.268127,582.580505 
                            C542.687622,602.765564 529.053589,610.594604 510.714203,608.700378 
                            C509.391968,608.563721 508.083923,608.289612 506.361816,607.986938 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M343.127563,537.000000 
                            C343.100342,555.961853 342.953430,574.424805 343.125580,592.884827 
                            C343.170410,597.690186 341.471680,599.258728 336.733521,599.163513 
                            C320.068604,598.828430 322.927460,600.675842 322.779083,585.534546 
                            C322.563995,563.581726 322.780304,541.624634 322.566620,519.671692 
                            C322.522461,515.137207 323.897186,513.246521 328.522949,513.666199 
                            C331.657227,513.950500 334.848602,513.880005 337.995850,513.677979 
                            C341.993652,513.421509 343.273682,515.281982 343.166382,519.037231 
                            C343.000214,524.853760 343.125275,530.678650 343.127563,537.000000 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M379.421692,468.433350 
                            C379.419861,475.534760 379.327881,482.185944 379.466187,488.832306 
                            C379.528809,491.842560 378.840179,493.439117 375.359985,493.403137 
                            C362.062958,493.265656 348.763214,493.289307 335.465485,493.388580 
                            C332.047729,493.414093 330.693054,492.064240 330.737213,488.664642 
                            C330.843048,480.520874 330.841156,472.373199 330.704742,464.230042 
                            C330.645569,460.696838 332.278076,459.633636 335.557159,459.648285 
                            C349.021179,459.708435 362.486420,459.693756 375.949677,459.557404 
                            C378.927765,459.527252 379.766144,460.944916 379.673492,463.501984 
                            C379.619354,464.996094 379.510010,466.488190 379.421692,468.433350 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M652.411316,421.311279 
                            C654.301575,419.722137 655.906677,419.679138 657.707764,420.816986 
                            C663.066833,424.202667 667.928955,428.200500 672.590698,432.475189 
                            C674.844238,434.541626 674.239197,436.479858 672.758118,438.620697 
                            C668.985596,444.073669 661.621033,445.682678 655.453796,442.332489 
                            C649.513306,439.105469 646.803223,432.210144 649.280273,426.200409 
                            C649.962524,424.544983 651.169312,423.105713 652.411316,421.311279 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M693.051208,431.120422 
                            C696.965027,427.532227 700.167725,423.698639 704.729370,421.382477 
                            C708.016296,419.713593 710.361450,420.442596 712.483215,423.217133 
                            C716.699890,428.731232 715.943604,435.850433 710.560669,440.620850 
                            C705.402161,445.192383 697.158569,444.983887 692.480652,440.250122 
                            C689.388611,437.121185 689.513062,434.219177 693.051208,431.120422 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M619.175842,641.772949 
                            C617.958496,638.008118 616.958008,634.501343 615.957458,630.994507 
                            C615.695129,630.949036 615.432800,630.903503 615.170471,630.858032 
                            C614.489136,633.762390 613.812622,636.667908 613.124451,639.570618 
                            C612.761719,641.100525 612.245667,642.457031 610.280518,642.456604 
                            C608.381592,642.456177 607.107666,641.767761 606.672913,639.771851 
                            C605.434021,634.084534 604.093750,628.418884 602.908508,622.720764 
                            C602.603149,621.252808 602.591553,619.504395 604.598938,619.143738 
                            C606.558655,618.791687 607.176086,620.347290 607.510986,621.859070 
                            C608.286865,625.362000 608.964844,628.886597 610.426025,632.416809 
                            C611.222717,628.937866 612.020691,625.459229 612.815552,621.979858 
                            C613.176392,620.400208 613.887268,619.124023 615.723999,619.092102 
                            C617.635620,619.058838 618.204895,620.419495 618.539734,621.993958 
                            C619.325745,625.689697 620.137024,629.380066 621.628235,633.096069 
                            C622.523560,629.292603 623.398071,625.484009 624.324280,621.688049 
                            C624.700806,620.145264 625.394043,618.656189 627.320679,619.105835 
                            C629.298279,619.567261 629.089844,621.167358 628.738525,622.735535 
                            C627.502197,628.253540 626.283325,633.775513 625.090576,639.303101 
                            C624.357117,642.701721 622.128601,642.870422 619.175842,641.772949 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M209.120438,642.457153 
                            C205.537796,640.939209 207.184982,638.088196 206.921799,635.816162 
                            C206.713303,634.016235 206.879822,632.172852 206.879822,629.692566 
                            C204.746506,632.121582 204.758438,634.810181 203.686401,637.003174 
                            C202.974091,638.460388 202.853516,640.613220 200.855957,640.694336 
                            C198.517120,640.789368 198.278961,638.452148 197.650955,636.832092 
                            C196.639084,634.221924 195.798340,631.545410 194.604263,628.081665 
                            C194.604263,632.561279 194.588989,636.158508 194.612671,639.755432 
                            C194.620789,640.989563 194.565063,642.168762 193.014450,642.375549 
                            C191.392136,642.591858 190.266602,641.706726 190.287460,640.193054 
                            C190.376572,633.726379 190.589828,627.259705 190.888504,620.799072 
                            C190.951126,619.444519 192.206177,619.025757 193.463303,618.936462 
                            C195.242004,618.810120 196.299667,619.757385 196.816818,621.320923 
                            C198.012238,624.934937 199.137527,628.572083 200.535110,632.966614 
                            C202.113739,628.552185 203.429550,624.839233 204.771042,621.135620 
                            C205.430878,619.313904 206.782043,618.578125 208.675247,618.808105 
                            C210.206375,618.994019 211.155777,619.869751 211.165833,621.410645 
                            C211.208054,627.888306 211.202591,634.366699 211.148132,640.844238 
                            C211.140640,641.735229 210.422668,642.283691 209.120438,642.457153 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M441.434875,642.467468 
                            C433.850739,642.904846 433.755707,642.824829 433.734802,635.631165 
                            C433.722260,631.318542 433.800110,627.005066 433.736023,622.693481 
                            C433.695892,619.993225 434.887268,618.686157 437.592041,618.743713 
                            C439.581329,618.786011 441.576019,618.721680 443.559479,618.845886 
                            C445.424927,618.962708 447.234314,619.548340 448.395874,621.062195 
                            C449.173676,622.075867 450.323456,623.925171 449.938110,624.533020 
                            C446.826202,629.442444 453.009033,634.118042 450.057465,638.958618 
                            C448.093750,642.179077 445.106995,642.500610 441.434875,642.467468 
                        M438.382050,634.721252 
                            C438.358459,636.584595 438.131012,638.632263 440.924652,638.578674 
                            C442.818512,638.542358 444.640808,638.091003 445.498444,636.161316 
                            C446.026672,634.972961 445.645111,633.715820 444.479919,633.138916 
                            C442.364288,632.091370 440.121124,631.150269 438.382050,634.721252 
                        M443.530334,627.290955 
                            C444.820709,626.114380 445.293335,624.700684 443.684021,623.629211 
                            C442.348633,622.740112 440.624146,622.281372 439.072571,623.315918 
                            C438.143494,623.935364 438.198151,625.086670 438.451111,626.015198 
                            C439.143005,628.555176 441.131256,627.790466 443.530334,627.290955 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M702.171387,640.446411 
                            C700.862976,645.004517 699.106750,642.707153 697.540161,640.966003 
                            C695.731079,638.955505 695.651062,635.560242 692.538879,634.506287 
                            C690.232788,635.874023 691.317993,638.157104 690.858398,639.958130 
                            C690.513000,641.311951 690.176208,642.663025 688.456238,642.616455 
                            C686.829590,642.572388 686.080078,641.396851 686.080994,639.940918 
                            C686.084778,633.793945 686.152466,627.646179 686.294495,621.500977 
                            C686.311707,620.757935 686.743347,619.832703 687.292236,619.329102 
                            C689.009827,617.753174 698.075684,618.730713 700.131958,620.600159 
                            C703.047913,623.251221 703.656250,627.668213 700.695374,630.882874 
                            C696.981934,634.914612 701.732300,637.055786 702.171387,640.446411 
                        M691.147095,626.485352 
                            C691.078857,628.722107 691.965271,629.993408 694.378662,629.466125 
                            C696.142700,629.080505 697.310364,627.934387 697.452515,626.100342 
                            C697.615417,623.997742 696.073425,623.400818 694.385254,622.948242 
                            C691.863708,622.272339 691.108887,623.523315 691.147095,626.485352 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M766.231445,618.827332 
                            C776.922791,618.478333 781.550049,621.181946 782.800476,628.165405 
                            C784.458313,637.424805 774.897461,645.733398 766.023804,642.770264 
                            C764.808411,642.364441 763.880615,641.751465 763.854309,640.400452 
                            C763.725220,633.772644 763.315796,627.136475 764.099609,620.528381 
                            C764.170776,619.928650 765.192627,619.441711 766.231445,618.827332 
                        M768.373352,628.706238 
                            C768.376038,630.530457 768.320374,632.357178 768.399048,634.178162 
                            C768.467712,635.768005 767.997925,637.728027 770.092468,638.408752 
                            C772.016479,639.034119 773.686523,638.186035 775.060486,636.853699 
                            C777.501770,634.486145 777.816467,627.813660 775.640930,625.233887 
                            C774.239136,623.571472 772.388489,622.851074 770.302734,623.318909 
                            C767.765076,623.888062 768.545044,626.110596 768.373352,628.706238 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M756.382935,638.085632 
                            C751.882935,643.569153 746.992371,644.671448 742.282349,641.590027 
                            C737.232666,638.286621 735.454163,630.742371 738.277222,624.600586 
                            C740.623413,619.496216 745.426697,617.224670 750.582031,618.781372 
                            C755.686523,620.322754 758.974548,626.246216 758.022278,632.458313 
                            C757.748047,634.246826 757.047363,635.970032 756.382935,638.085632 
                        M744.470581,624.183655 
                            C741.530090,627.583984 741.537903,631.518372 742.957092,635.379700 
                            C744.402588,639.312622 748.701233,639.967346 751.258301,636.924194 
                            C753.407166,634.366760 753.579712,627.236755 751.451172,624.695618 
                            C749.646667,622.541199 747.526245,621.661011 744.470581,624.183655 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M578.589111,627.732910 
                            C582.616333,628.270508 584.136047,626.697388 584.057800,623.024353 
                            C584.021179,621.303833 584.139404,618.956787 586.700439,618.994324 
                            C589.304626,619.032471 589.124634,621.301697 589.145508,623.096436 
                            C589.205566,628.249146 589.214783,633.403198 589.166870,638.556091 
                            C589.150024,640.368286 589.225769,642.638245 586.650635,642.611206 
                            C584.179993,642.585327 584.140137,640.344482 584.008423,638.525696 
                            C583.785522,635.446655 584.538818,631.873901 579.394165,632.240967 
                            C576.745361,632.429993 575.256470,633.166748 575.568848,636.066956 
                            C575.657166,636.887207 575.719116,637.753601 575.553284,638.548828 
                            C575.216614,640.163818 575.945435,642.702637 573.061035,642.512207 
                            C570.771851,642.361084 570.901855,640.305176 570.883850,638.674561 
                            C570.823486,633.189392 570.818176,627.703064 570.852844,622.217651 
                            C570.862244,620.722229 570.892395,619.047485 572.998169,618.911438 
                            C575.332825,618.760620 575.465088,620.550598 575.855103,622.208923 
                            C576.314819,624.164062 574.314270,627.222473 578.589111,627.732910 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M539.243652,619.078247 
                            C545.201721,622.633789 546.115112,626.505005 541.998474,631.341614 
                            C540.412292,633.205200 540.822449,634.481567 541.646667,636.193054 
                            C542.492004,637.948425 543.996643,639.437073 543.947693,641.837463 
                            C541.080261,643.930603 539.704041,642.034729 538.241943,639.800049 
                            C536.960266,637.841003 536.647522,634.938660 533.615967,634.468201 
                            C531.648376,635.854858 532.643066,637.879333 532.344910,639.566895 
                            C532.109863,640.897034 532.166626,642.355957 530.292664,642.385315 
                            C528.650635,642.411011 527.809631,641.356079 527.802490,639.871216 
                            C527.772949,633.730286 527.789001,627.587524 527.919678,621.448303 
                            C527.963867,619.371399 529.527039,618.675720 531.381775,618.696655 
                            C533.867004,618.724792 536.351074,618.850159 539.243652,619.078247 
                        M532.988281,625.421692 
                            C533.033508,626.680298 532.222107,628.006409 533.379272,629.325500 
                            C535.901245,629.684448 538.322266,629.388794 539.318054,626.558899 
                            C539.905457,624.889587 538.519226,623.821228 537.112000,623.186768 
                            C535.318298,622.377991 533.535522,621.918823 532.988281,625.421692 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M409.283264,622.623657 
                            C412.986603,618.303894 417.336639,617.245239 422.048706,619.370850 
                            C427.301239,621.740234 428.546600,626.487854 428.284271,631.827942 
                            C428.032288,636.957336 425.716003,640.709473 420.854797,642.552368 
                            C415.820435,644.460876 410.638763,642.108765 408.705261,636.989502 
                            C406.941925,632.320801 407.039276,627.586914 409.283264,622.623657 
                        M412.475281,633.823914 
                            C412.628357,634.294312 412.755280,634.775269 412.938660,635.233521 
                            C414.199951,638.384888 416.476288,639.604248 419.645416,638.286682 
                            C422.915192,636.927246 424.396484,630.695557 422.580170,626.271362 
                            C421.463257,623.550598 419.497711,621.929260 416.378540,622.732422 
                            C414.663208,623.174133 413.764313,624.568298 413.128906,626.203979 
                            C412.262512,628.434509 412.212616,630.712158 412.475281,633.823914 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M375.318604,632.075195 
                            C373.078705,636.271973 378.310486,638.250427 377.522278,642.563599 
                            C370.856964,643.591248 371.903900,635.348206 367.697357,633.790833 
                            C365.479065,635.374023 366.539490,637.554993 366.296600,639.403687 
                            C366.100311,640.897156 366.257721,642.621948 364.136444,642.682312 
                            C362.139465,642.739136 361.690521,641.250977 361.685638,639.626892 
                            C361.667999,633.798279 361.684296,627.969482 361.711975,622.140869 
                            C361.717529,620.969482 361.834564,619.827820 363.016388,619.112427 
                            C365.375244,617.684570 374.396912,618.863892 376.341034,621.106750 
                            C379.582031,624.845764 378.568207,628.439209 375.318604,632.075195 
                        M370.022797,623.118835 
                            C367.566467,622.807251 366.196747,623.730652 366.302917,626.365479 
                            C366.356415,627.692993 366.227997,629.176392 368.013947,629.451843 
                            C369.970490,629.753662 371.729797,629.063965 372.725861,627.394470 
                            C373.998444,625.261475 372.671082,624.040649 370.022797,623.118835 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M312.727936,637.964355 
                            C310.042633,633.027466 310.121979,628.411438 312.395691,623.780029 
                            C313.812378,620.894409 316.159058,619.237671 319.287140,618.602478 
                            C324.491394,617.545715 329.113129,620.198364 331.086945,625.405212 
                            C333.310852,631.271851 331.342041,638.697754 326.813873,641.522461 
                            C321.948029,644.557800 317.275238,643.481873 312.727936,637.964355 
                        M326.704376,628.060364 
                            C326.253601,624.937988 324.684662,622.629944 321.382019,622.542786 
                            C318.240814,622.459961 316.804138,624.844849 316.090027,627.570618 
                            C315.718658,628.988037 315.312683,630.539551 315.526001,631.938477 
                            C316.036804,635.288574 316.914337,638.747986 321.298462,638.701172 
                            C325.690155,638.654297 326.532440,635.408691 326.738617,631.854187 
                            C326.795990,630.865601 326.751343,629.871094 326.704376,628.060364 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M255.014557,642.735229 
                            C249.603409,641.567871 250.144867,635.603943 246.246262,633.020508 
                            C243.567856,634.490967 243.495209,637.172913 243.300354,639.767700 
                            C243.187775,641.266907 242.745697,642.398193 240.971863,642.324524 
                            C239.189163,642.250549 238.817673,640.991089 238.818237,639.558838 
                            C238.820618,633.564270 238.844421,627.569580 238.902542,621.575317 
                            C238.915985,620.189087 239.182159,618.835327 240.961136,618.687134 
                            C243.085571,618.510193 243.309036,620.042053 243.521774,621.600098 
                            C243.723221,623.075562 243.990738,624.541931 244.250244,626.142029 
                            C248.309906,624.320068 248.833160,617.087646 255.179840,618.933289 
                            C255.227509,619.466248 255.401901,619.886292 255.262451,620.077576 
                            C249.358597,628.173889 249.434967,628.125610 254.604004,637.133240 
                            C255.501205,638.696777 258.677002,640.433533 255.014557,642.735229 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M789.040466,629.127319 
                            C790.026245,626.246216 790.862671,623.730530 791.737854,621.228394 
                            C792.280334,619.677551 793.288635,618.773254 795.055908,618.767090 
                            C796.762024,618.761108 797.951904,619.400879 798.470215,621.052307 
                            C800.637695,627.957886 803.622559,634.628357 804.888550,641.768311 
                            C801.894592,643.550537 800.528748,642.255554 799.719543,639.847595 
                            C798.949341,637.555786 797.616150,636.318604 795.005920,636.283875 
                            C792.320435,636.248230 791.051208,637.609070 790.405884,639.904907 
                            C789.883484,641.763672 788.836975,643.039612 786.839355,642.268005 
                            C784.522949,641.373291 785.719421,639.490173 786.149292,638.016541 
                            C786.984741,635.152771 787.979004,632.335205 789.040466,629.127319 
                        M793.416382,631.381042 
                            C794.256287,632.618896 795.676270,632.654175 796.245300,631.673950 
                            C797.309753,629.840454 795.970825,628.253235 794.955078,625.579346 
                            C794.188354,628.071899 793.766052,629.444702 793.416382,631.381042 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M342.114563,623.328491 
                            C342.139191,627.277405 342.100891,630.772888 342.191345,634.265137 
                            C342.254333,636.698669 343.308014,638.494812 345.993866,638.627625 
                            C348.664673,638.759644 350.119781,636.974365 350.341553,634.693481 
                            C350.726624,630.732483 350.587463,626.722717 350.750763,622.736816 
                            C350.816711,621.126953 350.632233,619.026611 353.073547,619.120850 
                            C355.440155,619.212280 355.224213,621.293457 355.245453,622.901123 
                            C355.293823,626.560852 355.421051,630.237427 355.147736,633.879456 
                            C354.705414,639.773376 350.824982,643.375977 345.513275,643.193909 
                            C340.492676,643.021790 337.061066,639.225281 336.915771,633.471924 
                            C336.827576,629.980652 336.894592,626.480103 337.045654,622.990417 
                            C337.115601,621.375244 337.146027,619.346313 339.346252,619.122620 
                            C342.080170,618.844727 341.927490,621.066162 342.114563,623.328491 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M215.713867,641.515442 
                            C216.695099,634.246277 219.484055,627.824585 221.679123,621.222229 
                            C222.208984,619.628418 223.249908,618.776978 224.991730,618.751465 
                            C226.676224,618.726807 227.908783,619.387024 228.562378,620.927063 
                            C231.228775,627.209900 232.958099,633.797302 234.802200,640.346008 
                            C235.108887,641.435059 234.858414,642.330811 233.680435,642.717712 
                            C232.641785,643.058899 231.585052,642.850098 230.974274,642.007141 
                            C230.314621,641.096741 229.897156,639.987732 229.492386,638.920471 
                            C228.623138,636.628418 226.786728,636.324768 224.659683,636.256714 
                            C222.502655,636.187805 221.276474,637.068542 220.597153,639.098328 
                            C219.847382,641.338623 219.126740,643.921021 215.713867,641.515442 
                        M226.693970,628.636414 
                            C226.207245,627.720093 226.429230,626.417786 224.947632,625.677612 
                            C224.598145,627.869263 222.763870,629.497681 223.592957,632.082886 
                            C226.167999,632.842590 227.806122,632.643127 226.693970,628.636414 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M519.065430,627.062317 
                            C520.455688,631.218079 521.745911,634.989990 522.952393,638.788452 
                            C523.389404,640.164429 524.193787,641.823669 522.184692,642.631531 
                            C520.401123,643.348511 519.543274,642.122864 518.735229,640.688538 
                            C515.347961,634.675964 512.284058,634.681641 508.335785,640.722473 
                            C507.529510,641.956055 506.687988,642.912659 505.164185,642.461975 
                            C503.355011,641.926880 503.694397,640.387329 504.095062,639.153503 
                            C506.044617,633.149658 508.080353,627.173645 510.116669,621.198364 
                            C510.645874,619.645386 511.677002,618.724426 513.451721,618.752625 
                            C515.142883,618.779541 516.344360,619.493591 516.944641,621.051208 
                            C517.660828,622.909729 518.274353,624.807922 519.065430,627.062317 
                        M515.073730,630.162781 
                            C514.574219,628.930054 514.716003,627.312561 513.105957,626.495300 
                            C512.195496,628.395325 511.616241,630.071411 511.810730,632.383667 
                            C513.234131,632.326721 515.030762,633.888672 515.073730,630.162781 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M840.099121,512.494019 
                            C845.682556,515.414917 847.246582,518.912170 845.301270,523.396484 
                            C843.452148,527.659119 838.516724,529.624756 833.979919,527.905457 
                            C830.371094,526.537842 827.895569,521.432922 828.955322,517.543884 
                            C830.151917,513.152161 834.020386,511.290833 840.099121,512.494019 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M486.512329,619.102539 
                            C490.403961,618.838257 493.890411,618.748718 497.376190,618.770996 
                            C498.531006,618.778381 499.864166,618.943237 499.804749,620.583374 
                            C499.749023,622.121399 498.509583,622.342773 497.310760,622.419128 
                            C496.316895,622.482422 495.314575,622.401917 494.318237,622.441589 
                            C492.524323,622.512878 490.416473,622.168091 490.231567,624.874084 
                            C490.058746,627.403381 491.773651,627.880798 493.786926,627.960815 
                            C494.285309,627.980652 494.787720,627.988708 495.279877,628.060120 
                            C496.641724,628.257812 498.087463,628.531738 497.966858,630.324585 
                            C497.845734,632.125732 496.315063,632.080383 494.987823,632.240112 
                            C493.133240,632.463257 490.690918,631.655701 490.202301,634.548950 
                            C489.829712,636.755310 490.241943,638.611145 493.079285,638.659302 
                            C494.741943,638.687500 496.406555,638.662231 498.067169,638.733154 
                            C499.311401,638.786377 500.409241,639.150574 500.407593,640.702698 
                            C500.406281,641.922729 499.573547,642.531494 498.528107,642.649841 
                            C494.544952,643.100464 490.562805,643.080933 486.625122,642.213806 
                            C485.499512,641.965820 484.903137,641.081726 484.941101,640.028381 
                            C485.190155,633.118713 483.699707,626.107300 486.512329,619.102539 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M260.768188,632.940002 
                            C260.774689,631.285217 260.779846,630.119324 260.785156,628.953369 
                            C260.834045,618.229370 262.234283,617.062439 272.904877,618.742737 
                            C274.306305,618.963440 275.745972,619.182434 275.557709,620.968506 
                            C275.394562,622.515991 273.958557,622.372742 272.800079,622.406250 
                            C272.300964,622.420715 271.796448,622.355347 271.301941,622.403564 
                            C269.149872,622.613525 266.154388,621.527161 265.977478,625.173401 
                            C265.800262,628.825623 268.853088,627.481689 270.711060,627.832031 
                            C272.171539,628.107422 273.957855,627.919128 274.022797,630.009277 
                            C274.088715,632.131165 272.361542,632.182190 270.843018,632.252319 
                            C268.486481,632.361206 265.927002,632.100647 266.077209,635.695435 
                            C266.231323,639.383301 269.017303,638.498962 271.207825,638.739075 
                            C272.892242,638.923706 275.444397,638.230530 275.291992,641.020325 
                            C275.167297,643.302490 272.855957,642.707153 271.295990,642.899414 
                            C270.967957,642.939880 270.630402,642.897949 270.297363,642.903381 
                            C260.802765,643.058472 260.802765,643.058716 260.768188,632.940002 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M660.328613,635.109619 
                            C659.040405,642.171570 651.995178,645.276245 646.296265,641.695618 
                            C644.999146,640.880676 643.596497,639.918335 644.468140,638.140198 
                            C645.241394,636.562988 646.686157,637.082581 647.963318,637.590088 
                            C648.426941,637.774292 648.854187,638.073975 649.330017,638.199280 
                            C651.438965,638.754578 654.077637,639.593140 655.110718,637.157288 
                            C656.339661,634.259766 653.190063,633.891418 651.460510,632.872437 
                            C650.604004,632.367920 649.616943,632.083374 648.766113,631.571289 
                            C646.128601,629.983826 643.670898,628.158142 643.893005,624.635254 
                            C644.066589,621.881958 645.735229,620.034424 648.219971,619.008301 
                            C651.545349,617.635071 654.750305,618.136108 657.769287,619.971863 
                            C658.679382,620.525208 659.256714,621.368103 658.829590,622.482727 
                            C658.396423,623.613098 657.431885,623.825562 656.366882,623.544006 
                            C655.242493,623.246826 654.161682,622.754700 653.025513,622.539307 
                            C651.228394,622.198486 649.502197,622.628052 648.952881,624.513733 
                            C648.357788,626.556396 650.337219,626.904785 651.621643,627.451965 
                            C655.262573,629.003113 659.434753,629.853210 660.328613,635.109619 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M675.121643,632.293823 
                            C672.349670,632.273682 670.319763,632.570862 670.328003,635.681824 
                            C670.337097,639.088501 672.783813,638.471985 674.893738,638.706116 
                            C676.977844,638.937439 680.542297,637.498901 680.538940,640.776550 
                            C680.535645,643.916321 676.962830,642.684509 674.853149,642.940063 
                            C673.381287,643.118347 671.863892,642.899963 670.366760,642.895203 
                            C667.156189,642.885010 665.460876,641.589050 665.610046,638.079834 
                            C665.821899,633.094604 665.808716,628.096924 665.777100,623.105225 
                            C665.757202,619.960999 667.119080,618.509827 670.306641,618.671997 
                            C672.797058,618.798706 675.297852,618.710327 677.792053,618.783508 
                            C678.817444,618.813660 679.855591,619.097656 680.010254,620.332520 
                            C680.195251,621.809082 679.168274,622.450317 677.937134,622.626343 
                            C676.462341,622.837219 674.958801,622.867432 673.465820,622.926636 
                            C671.760437,622.994385 670.580444,623.563538 670.513428,625.520874 
                            C670.439575,627.676697 671.862244,627.885803 673.475647,627.949036 
                            C674.305054,627.981445 675.141968,628.033020 675.956665,628.180115 
                            C676.976685,628.364258 677.909668,628.791077 678.041016,629.979431 
                            C678.244934,631.823730 677.011658,632.200195 675.121643,632.293823 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M478.504395,621.023071 
                            C478.882507,623.877319 477.148987,623.382263 475.686310,623.177002 
                            C474.380737,622.993713 473.097015,622.489319 471.798157,622.468567 
                            C470.388947,622.445984 469.113892,623.207825 468.815308,624.663879 
                            C468.530914,626.050903 469.752350,626.690247 470.807587,627.191895 
                            C472.307007,627.904602 473.896606,628.432739 475.376038,629.181335 
                            C478.399109,630.711121 480.675293,632.851929 479.938507,636.618652 
                            C479.211761,640.333984 476.671631,642.275452 473.029755,642.853882 
                            C470.286011,643.289673 467.743622,642.590332 465.349701,641.294617 
                            C464.275085,640.713013 463.363800,639.903198 463.837311,638.513977 
                            C464.362488,636.973083 465.610229,637.314880 466.756500,637.610779 
                            C467.560669,637.818420 468.333313,638.155029 469.141785,638.337708 
                            C471.163910,638.794739 473.426910,639.095886 474.344482,636.793335 
                            C475.431763,634.064880 472.744537,633.504395 471.116394,632.650208 
                            C464.091461,628.964722 462.237091,626.054504 464.577759,622.041016 
                            C466.943298,617.984863 472.577484,617.440430 478.504395,621.023071 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M550.777710,622.874878 
                            C554.277222,618.649170 558.537720,617.997803 563.208252,619.017029 
                            C564.820251,619.368896 566.749268,619.994873 566.261414,622.188416 
                            C565.783630,624.336182 563.937073,623.409607 562.530212,623.272949 
                            C555.926025,622.631226 552.947449,625.273987 553.229675,631.520813 
                            C553.466614,636.766235 556.616394,639.246277 561.835999,638.310486 
                            C562.636230,638.167053 563.445679,638.070496 564.253967,637.980103 
                            C564.400940,637.963684 564.563049,638.083130 564.718201,638.139832 
                            C564.675903,641.641846 562.447876,643.393372 558.387939,643.116272 
                            C551.892700,642.673035 546.969971,635.990479 548.159302,629.150635 
                            C548.531189,627.012207 549.236145,624.967590 550.777710,622.874878 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M817.961304,638.652893 
                            C817.748413,640.753723 817.626709,642.553650 815.318726,642.574463 
                            C813.964417,642.586670 812.941772,641.630554 813.066956,640.394775 
                            C813.830994,632.854309 809.378601,627.187256 806.349915,620.998352 
                            C806.158264,620.606750 806.324951,620.039795 806.324951,619.158203 
                            C813.049316,617.802734 812.489014,624.756104 815.614563,627.229431 
                            C818.743286,625.000244 817.265747,618.100037 824.365540,619.145508 
                            C822.310425,625.740723 817.273071,631.116028 817.961304,638.652893 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M722.793945,635.815186 
                            C722.788269,632.860901 722.691589,630.371887 722.798767,627.891663 
                            C722.919067,625.106262 722.439087,622.968079 719.049866,622.685059 
                            C717.714722,622.573669 716.297424,622.017639 716.648499,620.220032 
                            C716.930847,618.774353 718.272034,618.710632 719.433350,618.702026 
                            C723.408691,618.672607 727.384827,618.677917 731.359985,618.725342 
                            C732.485168,618.738770 733.882507,618.626526 734.077026,620.207397 
                            C734.259949,621.694153 733.172668,622.295654 731.904053,622.305298 
                            C728.363098,622.332214 728.045837,624.659729 728.052063,627.372131 
                            C728.060364,631.016296 728.034851,634.663025 727.899048,638.304016 
                            C727.833984,640.047241 728.141724,642.393005 725.583191,642.539124 
                            C722.619812,642.708496 722.950500,640.210144 722.806274,638.271790 
                            C722.757202,637.612610 722.794922,636.946960 722.793945,635.815186 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M291.283813,622.687744 
                            C290.827026,621.206299 289.394897,619.868286 291.362915,619.010010 
                            C292.735992,618.411194 294.054718,618.956787 294.818329,620.221252 
                            C296.163818,622.449097 297.368286,624.762024 298.603241,626.987976 
                            C302.716278,625.524475 301.007538,617.941528 307.553680,619.198608 
                            C307.633698,622.454468 305.644684,624.648315 304.464966,627.093689 
                            C302.650848,630.854065 300.752747,634.504578 301.181824,638.903809 
                            C301.342957,640.556030 301.206482,642.465149 298.786224,642.437073 
                            C296.285065,642.408081 296.434113,640.506470 296.617310,638.837769 
                            C297.283417,632.770142 293.876190,628.059753 291.283813,622.687744 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M397.708862,627.039001 
                            C398.394073,624.093445 396.034637,619.545715 399.844696,619.491394 
                            C404.228210,619.429016 401.998993,624.111816 402.271759,626.690125 
                            C402.636749,630.140137 402.420410,633.670532 402.230042,637.154175 
                            C402.091949,639.681763 400.666046,641.467163 398.236694,642.377502 
                            C396.017456,643.209045 393.981171,642.785522 392.102478,641.467529 
                            C391.242859,640.864441 390.683899,640.026123 391.035248,638.909546 
                            C391.315796,638.018005 392.077728,637.392029 392.924561,637.676575 
                            C398.476471,639.541870 397.583282,635.567322 397.677765,632.503540 
                            C397.729034,630.841553 397.700073,629.177124 397.708862,627.039001 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M633.885986,638.533325 
                            C633.880798,632.952820 633.855469,627.820435 633.895691,622.688538 
                            C633.909058,620.984680 634.105591,619.102844 636.341736,619.069092 
                            C638.597656,619.035034 638.863037,620.985413 638.878357,622.633179 
                            C638.929260,628.091858 638.847229,633.552124 638.781128,639.011353 
                            C638.763123,640.489929 638.885681,642.256409 636.870667,642.504944 
                            C634.291138,642.823059 633.947327,640.955566 633.885986,638.533325 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M833.280579,626.113159 
                            C833.251709,628.743042 833.279907,630.905151 833.174744,633.060791 
                            C833.109802,634.393982 832.939270,635.913147 831.106750,635.858521 
                            C829.420776,635.808411 828.944824,634.405396 828.901367,633.040161 
                            C828.780029,629.222656 828.773804,625.400879 828.766968,621.580688 
                            C828.764526,620.193298 828.975952,618.817749 830.782349,618.717834 
                            C832.842834,618.603760 833.229187,620.013062 833.257874,621.655701 
                            C833.281128,622.984436 833.274719,624.313721 833.280579,626.113159 
                        z"/>
                        <path fill="grey" opacity="1.000000" stroke="none" 
                            d="
                        M833.334839,640.671387 
                            C831.980835,643.115112 830.370239,643.158264 829.124084,641.202454 
                            C828.288879,639.891663 828.564331,638.069397 830.203552,637.434814 
                            C832.802307,636.428955 833.227295,638.349670 833.334839,640.671387 
                        z"/>
                    </svg>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
