<form action="">
    <div class="realestate-filter">
      <div class="container">
        <div class="realestate-filter-wrap nav">
          <a href="#for-rent" class="active" data-toggle="tab" id="rent-tab" aria-controls="rent" aria-selected="true">Renta</a>
          <a href="#for-sale" class="" data-toggle="tab" id="sale-tab" aria-controls="sale" aria-selected="false">Venta</a>
        </div>
      </div>
    </div>

<style>
      #rent-tab.active,
      #sale-tab.active {
    background-color: #ffe600;
}
</style>
    
    <div class="realestate-tabpane pb-5">
      <div class="container tab-content">
         <div class="tab-pane active" id="for-rent" role="tabpanel" aria-labelledby="rent-tab">

           <div class="row">
             <div class="col-md-4 form-group">
               <select name="" id="" class="form-control w-100">
                 <option value="">Tipo de Inmueble</option>
                 <option value="">Terreno</option>
                 <option value="">Casa</option>
                 <option value="">Departamento</option>
                 
               </select>
             </div>
             <div class="col-md-4 form-group">
               <input type="text" class="form-control" placeholder="Titulo">
             </div>
             <div class="col-md-4 form-group">
               <input type="text" class="form-control" placeholder="Lugar">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 form-group">
               <select name="" id="" class="form-control w-100">
                 <option value="">Recamaras</option>
                 {{-- <option value="">0</option> --}}
                 <option value="">1</option>
                 <option value="">2</option>
                 <option value="">3+</option>
               </select>
             </div>
             <div class="col-md-4 form-group">
               <select name="" id="" class="form-control w-100">
                 <option value="">Baños</option>
                 {{-- <option value="">0</option> --}}
                 <option value="">1</option>
                 <option value="">2</option>
                 <option value="">3+</option>
               </select>
             </div>
             <div class="col-md-4 form-group">
               <div class="row">
                 <div class="col-md-6 form-group">
                   <select name="" id="" class="form-control w-100">
                     <option value="">Precio Min</option>
                     <option value="">$100</option>
                     <option value="">$200</option>
                     <option value="">$300</option>
                     <option value="">$400</option>
                   </select>
                 </div>
                 <div class="col-md-6">
                   <select name="" id="" class="form-control w-100">
                     <option value="">Precio Max</option>
                     <option value="">$25,000</option>
                     <option value="">$50,000</option>
                     <option value="">$75,000</option>
                     <option value="">$100,000</option>
                     <option value="">$100,000,000</option>
                   </select>
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <input type="submit" class="btn btn-black py-3 btn-block" value="Buscar">
             </div>
           </div>

         </div>
         <div class="tab-pane" id="for-sale" role="tabpanel" aria-labelledby="sale-tab">
           <div class="row">
             <div class="col-md-4 form-group">
               <select name="" id="" class="form-control w-100">
                <option value="">Tipo de Inmueble</option>
                <option value="">Terreno</option>
                <option value="">Casa</option>
                <option value="">Departamento</option>
                <option value="">Villa</option>
               </select>
             </div>
             <div class="col-md-4 form-group">
                <input type="text" class="form-control" placeholder="Titulo">
              </div>
              <div class="col-md-4 form-group">
                <input type="text" class="form-control" placeholder="Lugar">
              </div>
            </div>

           <div class="row">
             <div class="col-md-4 form-group">
               <select name="" id="" class="form-control w-100">
                <option value="">Recamaras</option>
                {{-- <option value="">0</option> --}}
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3+</option>
               </select>
             </div>
             <div class="col-md-4 form-group">
               <select name="" id="" class="form-control w-100">
                <option value="">Baños</option>
                 {{-- <option value="">0</option> --}}
                 <option value="">1</option>
                 <option value="">2</option>
                 <option value="">3+</option>
               </select>
             </div>
             <div class="col-md-4 form-group">
               <div class="row">
                 <div class="col-md-6 form-group">
                   <select name="" id="" class="form-control w-100">
                    <option value="">Precio Min</option>
                    <option value="">$100</option>
                    <option value="">$200</option>
                    <option value="">$300</option>
                    <option value="">$400</option>
                   </select>
                 </div>
                 <div class="col-md-6">
                   <select name="" id="" class="form-control w-100">
                    <option value="">Precio Max</option>
                    <option value="">$25,000</option>
                    <option value="">$50,000</option>
                    <option value="">$75,000</option>
                    <option value="">$100,000</option>
                    <option value="">$100,000,000</option>
                   </select>
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <input type="submit" class="btn btn-black py-3 btn-block" value="Buscar">
             </div>
           </div>

         </div>
      </div>
    </div>
  </form>