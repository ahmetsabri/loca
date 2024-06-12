<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('projects') }}
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
        init(){
            const townUrl = `{{ route('province.towns',$project->province) }}`

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
