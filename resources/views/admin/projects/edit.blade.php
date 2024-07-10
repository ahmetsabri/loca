<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            projeler
        </h2>
    </x-slot>
    <div class="p-12" x-data="{
        towns:[],
        districts:[],
        numOfFeatures:3,
        numOfTransportation:3,
        siteFeatures:3,
        flatFeatures:2,
        numOfFlats:0,
        projectDistrict:`{{ $project->district_id }}`,
        projectTown:`{{ $project->town_id }}`,
        formattedNumber:`{{ $project->price_in_tl }}`,
                formatNumber(event) {
                let input = event.target;
                let number = parseInt(input.value.replace(/\D/g, ''));
                if (!isNaN(number)) {
                let formatted = number.toLocaleString('tr-TR');
                input.value = formatted;

                }
                },
removeFlat(url){
    if(!confirm('emin misiniz')){
    return
    }
    window.location.href=url;
    },
        init(){
                const townUrl = `{{ route('province.towns',$project->province) }}`
                let input = `{{$project->price_in_tl}}`
                let number = parseInt(input.replace(/\D/g, ''));
                if (!isNaN(number)) {
                let formatted = number.toLocaleString('tr-TR')
                this.formattedNumber = formatted
                }
            this.loadTowns(townUrl)
            this.loadDistricts(`{{ $project->town_id }}`)
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
            </div>
        </div>
@include('admin.projects.edit_form')
    </div>
</x-app-layout>
