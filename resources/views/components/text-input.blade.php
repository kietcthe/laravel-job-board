<div class="relative">
    @if($formRef)
        <button class="absolute right-2 top-0 h-full"
                type="button"
                @click="$refs['input-{{$name}}'].value = ''; $refs['{{$formRef}}'].submit();"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-4 h-4 text-slate-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    @endif
    <input type="text" placeholder="{{$placeholder}}" name="{{$name}}" value="{{$value}}" x-ref="input-{{$name}}"
           class="pr-8 w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2"
    >
</div>
