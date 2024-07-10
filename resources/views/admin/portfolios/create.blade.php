<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight capitalize text-indigo-700">
            portföy
        </h2>
    </x-slot>
    <div class="p-12" x-data="{
        towns:[],
        districts:[],
        numOfFeatures:3,
        firstLevelChildren:[],
        secondLevelChildren:[],
        filterable:0,
        selectedCategory:null,
        selected1stCategory:null,
        selected2ndCategory:null,
        infos:[],
        formattedNumber:null,
        images: [],
        handleFiles(event) {
            const files = event.target.files;
            const self = this;
            for (const file of files) {
                const reader = new FileReader();
                reader.onload = (e) => {
        axios.post(`{{ route('portfolio.upload') }}`,{
                    images:e.target.result
                    },{
                    headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')
                    },
                    }).then(res=>{

                    self.images = res.data.images
                    }).catch(err=>{
                    alert('err')
                    console.log(err)
                    })
                }
                reader.readAsDataURL(file);
                new Promise(resolve => setTimeout(resolve, 2000));
            }
        },
        formatNumber(event) {
            let input = event.target;
            let number = parseInt(input.value.replace(/\D/g, ''));
            if (!isNaN(number)) {
                let formatted = number.toLocaleString('tr-TR');
                input.value = formatted;
            }
        },
        loadInfo(id){
            const self = this;
            url = `{{ route('category.info') }}/${id}`
            axios.get(url).then(res=>{
                self.infos = res.data.info
                console.log(res.data.info)
            }).catch(err=>{
                alert(err);
                console.log(err)
            })
        },
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
            this.loadInfo(id)
                 url = `{{ route('category.children') }}/${id}`
            axios.get(url).then(res=>{
                if(level == 1){
                    self.firstLevelChildren = res.data.children
                    return
                }
                self.secondLevelChildren = res.data.children
            }).catch(err=>{
                alert(err);
                console.log(err)
            })
        },
        loadTowns(id){
            const url = `{{ route('province.towns') }}/` + id
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
        @include('admin.portfolios.create_form')
    </div>
</x-app-layout>
