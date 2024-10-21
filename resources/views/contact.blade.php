<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Контакты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Контактная информация") }}
                    <style>
   .ramka {
    border: 3px solid #00a8e1;
   }
</style>
                    <pre>       
        Государственное бюджетное профессиональное образовательное учреждение Иркутской области «Ангарский политехнический
техникум» находится по адресу:
665830, Иркутская область, город Ангарск, 52 квартал, дом 1
Телефон приемной комиссии: (3955) 51-21-04
Телефон\факс секретаря: (3955) 52-20-60
Адрес электронной почты: apt@aptangarsk.ru
Официальный сайт техникума: aptangarsk.ru
<img src="{{ asset('img/mer.jpeg') }}" alt="Example" width="300" align="center" class="ramka">
Петров Сергей Анатольевич
<img src="{{ asset('img/5.jpeg') }}" alt="Example" width="300" align="center" class="ramka">
Сасина Марина Степановна
<img src="{{ asset('img/1.jpeg') }}" alt="Example" width="300" align="center" class="ramka">
Сафронов Андрей Сергеевич
<img src="{{ asset('img/2.jpeg') }}" alt="Example" width="300" align="center" class="ramka">
Головков Михаил Эдуардович
<img src="{{ asset('img/4.jpeg') }}" alt="Example" width="300" align="center" class="ramka">
Титов Александр</pre>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
