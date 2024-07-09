<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            portföyü güncelle
        </h2>
    </x-slot>
    <div class="p-12" x-data="{
        init(){
                if(`{{ $portfolio->category->parent->parent_id }}`){
                    this.loadChildren(`{{ $portfolio->category->parent->parent_id }}`,1); // arsa
                    this.loadChildren(`{{ $portfolio->category->parent_id }}`,2); //kiralik
                }
                if(!`{{ $portfolio->category->parent->parent_id }}`){
                    this.loadChildren(`{{ $portfolio->category->parent_id }}`,1); //kiralik
                    this.loadChildren(`{{ $portfolio->category_id }}`,2); // arsa
                }
                this.selected2ndCategory = `{{ $portfolio->category_id }}`
                const townUrl = `{{ route('province.towns',$portfolio->province) }}`
                this.loadTowns(townUrl)
                this.loadDistricts(`{{ $portfolio->town_id }}`)

        },
        firstLevelChildren:[],
        secondLevelChildren:[],
        filterable:0,
        selectedCategory:`{{ $portfolio->category_id }}`,
        selected1stCategory:null,
        selected2ndCategory:`{{ $portfolio->category_id }}`,

        loadChildren(id,level=1){
            const self = this
            let url;
            if (level == 1 ){
                self.selectedCategory = id;
                self.firstLevelChildren= [];
                self.secondLevelChildren= [];
                self.selected1stCategory = null;
                self.selected2ndCategory=null;

            }
            if (level != 1) {
                self.selected1stCategory = id
            }
                 url = `{{ route('category.children') }}/${id}`
            axios.get(url).then(res=>{
                if(level == 1){
                    self.firstLevelChildren = res.data.children
                    return
                }
                self.secondLevelChildren = res.data.children
            }).catch(err=>{
                console.log(err)
            })
        },
        towns:[],
        districts:[],
        numOfFeatures:0,
        portfolioDistrict:`{{ $portfolio->district_id }}`,
        portfolioTown:`{{ $portfolio->town_id }}`,
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
