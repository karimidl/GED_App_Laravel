@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/flatly/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<link rel="stylesheet" href="{{ asset('assets/css/css_table_show.css') }}">

<script src="{{ asset('assets/js/dossier.js') }}"></script>
<style>
   .panel_view_bottom {
   display: block;
   }
   span.title_profil {
   padding-left: unset !important; 
   }
   .panel_view_bottom {
   height: auto !important;
   margin-bottom: 37px;
   }
   .panel_view_details {
   margin-bottom: 15px;
   }
   #organigramme_table_wrapper {
   margin-bottom: 15px;
   }
   i.fa-solid.fa-circle-xmark {
   font-size: 18px;
   color: #e91e63;
   margin-top: 10px;
   }
   .form-group.row {
    align-items: center;
   }

   .form-control {
    height: 36px;
    padding: 1px 15px;
   }

   .form-control:focus, input:focus {
    border-color: #d7d1cb !important;
    }

    .attribut_file {
    border: 2px solid #cbc3c3;
    border-radius: 22px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-top: 15px;
   }

   #attribut_champ {
    width: 100%;   
    PADDING-TOP: 15PX;
   }
   .btn_panel {
    text-align: -webkit-center;
    padding-top: 25px;
    padding-bottom: 20px;
   }

   .btn_panel button {
    padding: 5px 10px;
    }

    .panel_organigramme {
    PADDING-RIGHT: 0px!important;
    PADDING-LEFT: 0px !important;
    }

    .panel_view_details , .header_view {

    width: 94% !important;

    }

    .panel_organigramme {
    PADDING-RIGHT: 25px!important;
    height: 550px !important;
     }

     .form-group label {
    font-size: 14px;
    }
 
</style>
<div class="header_view">
   <div class="sub_view">
  
      Résultats : 
 
   </div>
</div>
<div class="panel_view_details">
   <div class="table_p">
             

   <div class="block_data_dossier  tbl_profil" style='width: 73%;'>


     
       <table class="rwd-table">
               <tbody>
                  <tr>
                  <th width="25%">Date</th>
                  <th width="25%"> Numero</th>
                  <th width="40%"> Titre</th>
                  <th width="10%">Voir</th>
         
                  </tr>
  

                  @for ($i = 0; $i < count($dossiers) ; $i++)
                  
                           <tr>
                                   
                                    <td> 
                                    {{$dossiers[$i]['id']}}

                                    </td>


                                    <td> 
                                 
                                    {{$dossiers[$i]['date']}}
                                    </td>

                                    <td> 
                                    {{$dossiers[$i]['titre']}}

                                    </td>


                                    <td> 
                                    <div class="control_block">

                                      

<div class="col-xsm mr-2">
   <a href="/show_dossier/   {{$dossiers[$i]['id']}} " target="_blank">
      <button class="btn btn-warning" style="padding: 3px 5px;" >
         <svg width="26px" height="26px" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title>folder--details</title><rect x="16" y="20" width="14" height="2"/><rect x="16" y="24" width="14" height="2"/><rect x="16" y="28" width="7" height="2"/><path d="M14,26H4V6h7.17l3.42,3.41.58.59H28v8h2V10a2,2,0,0,0-2-2H16L12.59,4.59A2,2,0,0,0,11.17,4H4A2,2,0,0,0,2,6V26a2,2,0,0,0,2,2H14Z"/><rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/></svg>
      </button>
   </a>
  </div>
</div>

                                    </td>


                              </tr>
                   @endfor
                  
                 
               </tbody>
            </table>
      

   </div>
</div>



 

@endsection