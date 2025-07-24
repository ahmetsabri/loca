<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rakamsal Veriler
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="m-5">
            <div class="p-4">
                <form class="space-y-4 flex flex-wrap justify-center" action="{{ route('fun_facts.create') }}"
                    method="post">
                    @csrf

                    <div class="w-full">
                        <div class="w-1/3 mx-auto">
                            <label for="customer_calls"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white uppercase">
                                Müşteri Bizi Aradı
                            </label>
                            <input type="number" name="customer_calls" id="customer_calls"
                                value="{{ old('customer_calls', $funFact->customer_calls ?? 0) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="w-1/3 mx-auto">
                            <label for="customers_hosted"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white uppercase">
                                Müşterimizi Ofislerimizde Ağırladık
                            </label>
                            <input type="number" name="customers_hosted" id="customers_hosted"
                                value="{{ old('customers_hosted', $funFact->customers_hosted ?? 0) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="w-1/3 mx-auto">
                            <label for="digital_contracts_signed"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white uppercase">
                                Adet Dijital Sözleşme İmzalandı
                            </label>
                            <input type="number" name="digital_contracts_signed" id="digital_contracts_signed"
                                value="{{ old('digital_contracts_signed', $funFact->digital_contracts_signed ?? 0) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="w-1/3 mx-auto">
                            <label for="property_transactions_completed"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white uppercase">
                                Mülkün İşlemi Yapıldı
                            </label>
                            <input type="number" name="property_transactions_completed"
                                id="property_transactions_completed"
                                value="{{ old('property_transactions_completed', $funFact->property_transactions_completed ?? 0) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="w-1/3 mx-auto">
                            <label for="properties_shown"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white uppercase">
                                Müşterimize Yer Gösterildi
                            </label>
                            <input type="number" name="properties_shown" id="properties_shown"
                                value="{{ old('properties_shown', $funFact->properties_shown ?? 0) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="w-1/3 mx-auto">
                            <label for="coffees_consumed"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white uppercase">
                                Kahve İçildi
                            </label>
                            <input type="number" name="coffees_consumed" id="coffees_consumed"
                                value="{{ old('coffees_consumed', $funFact->coffees_consumed ?? 0) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                    </div>

                    <div class="w-1/5 mx-auto my-3">
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
