<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('update_portfolio') }}
        </h2>
    </x-slot>
    <div class="p-12" x-data="{
        towns:[],
        districts:[],
        numOfFeatures:0,
        portfolioDistrict:`{{ $portfolio->district_id }}`,
        portfolioTown:`{{ $portfolio->town_id }}`,
        init(){
            const townUrl = `{{ route('province.towns',$portfolio->province) }}`

            this.loadTowns(townUrl)
            this.loadDistricts(`{{ $portfolio->town_id }}`)
        },
        loadTowns(url){
            this.districts=[]
            const self = this
            axios.get(url).then((res)=>{
                console.log(res.data.towns)
                self.towns = res.data.towns

            }).catch((err)=>{
                console.log(err)
            })
    },
    loadDistricts(id){
        const url = `{{ route('towns.districts') }}/` + id
        const self = this
            axios.get(url).then((res)=>{
            console.log(res.data.districts)
            self.districts = res.data.districts

            }).catch((err)=>{
            console.log(err)
            })
    }
    }">
        <div class="flex flex-wrap">
            <div class="w-full">
                <h1 class="text-xl">
                </h1>
            </div>
        </div>
        @include('admin.portfolios.update_form')
    </div>
</x-app-layout>
