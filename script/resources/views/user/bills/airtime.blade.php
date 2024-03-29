
@extends('layouts.user.master')

@section('content')


<div class="ccontainer-fluid  ">
  <div class="content-wrapper card-body">
      <form action="{{ route('user.airtimebuy') }}" method="post" class="ajaxform_instant_reload">
                      @csrf
    <div class="row ">
      <div class="col-md-8"><div class="card"><div class="card-body">
          
         
        <h6 class="h2 d-inline-block mb-0">{{__('Airtime')}}</h6>
        
        
          <div class="bg-white border-0 mb-0">
                   <br>
                  <div class="">
                    
                      
                        <div class="  ">
                         <div class="col-12 row container">
                        <p data-v-62dda23e="" class="text-title font-weight-bold">Select provider</p>
                         @foreach($network as $data)
                         <div class="col-3">
                         <div class="text-center">
                                   <center>
                                        <div class=" form-check avatar mb-2">
                                            <input class="form-check-input v-image__image v-image__placeholder" style="background-image: url({{url('/')}}/asset/images/{{$data->image}});background-size: contain;" value="{{$data->symbol}}" name="network" type="radio"/>
                                            <label for="contact3" class="avatar shadow-sm">
                                                
                                            </label>
                                        </div>
                                        <p class="text-color-theme size-12 small">{{$data->name}}</p>
</center>
                                    </div></div>
                                    @endforeach
                    
                            </div>
                            </div>
                            <div class="row">
                                   
                            
                            
                                <div class="col-md-6">
                                    <div class="form-group"> 
                               
                            <div class="input-group">
                              <span class="input-group-prepend">
                                <span class="input-group-text">₦</span>
                              </span>
                              <input type="number" step="any" class="amt form-control" name="amount" placeholder="Enter Amount" required>
                              
                            </div>
                          </div>  </div>
                           
                                <div class="col-md-6">
                          <div class="form-group "> 
                            
                           <select name="type"  id="myselection" class="form-control"> 
                                <option>Select Airtime Beneficiary</option>
                                <option value="new">New Number</option>
                                <option value="red">Saved Beneficiary</option>
                                
                            </select>

                            </div>
                        </div> </div>
                        
                        
                            <div class=" form-group row red box">
                          <div class="col-md-12">
                            <div class="input-group">
                              <span class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-users"></i></span>
                              </span>
                            <select name="choosebeneficiary" class="form-control" data-placeholder="Beneficiary">
                              <option label="Choose one">Select Beneficiary
                              </option>
                              @foreach($benefit as $data)
                              <option value="{{$data->is_beneficiary}}">{{$data->is_beneficiary_name}} ( {{$data->is_beneficiary}} )</option>
                              @endforeach
                            </select>
                            </div><br>
                          </div>
                        </div>
                        
                        
                            <div class=" form-group row new box">
                                
                          <div class="col-md-12">
                            <div class="input-group">
                              <span class="input-group-prepend">
                                <span class="input-group-text">+234</span>
                              </span>
                              <input type="number" pattern="\d*" class="form-control" name="phone" placeholder="Phone Number" minlength="11" requsired>
                            </div>
                            
                            
                            
                            <hr>
                            </div>
                            
                            <div class="row">
                          <div class="col-md-6">
                          <div class="custom-control custom-control-alternative custom-checkbox">
                                                                                            <input type="checkbox" name="saveben" id="customCheckLogin8" class="custom-control-input">
                                                                                        <label class="custom-control-label" for="customCheckLogin8">
                                            <span class="text-muted">Save New Beneficiary</span>     
                                            </label>
                                        </div>  <br>
                          </div>
                         <div class="col-lg-6 yeah2" style="display:none;">
                                           
                                            <input type="text" name="beneficiary" class="form-control" placeholder="Save As?"><br>
                                        </div>
                                        
                                        </div>


                        </div>
                        
                    
                            <input id="dis" name="dis" type="hidden" value"">
                            <div id="yeah" style="display:none;" class="yeah form-group">
                            
                          <div class="col-md-12" id="preview">
                            <div class="input-group">
                                
                              <span class="input-group-prepend">
                                <span id="email2" class="input-group-text">Discount code</span>
                              </span>
                              <input type="text" id="email" class="form-control" name="email" placeholder="">
                            </div>
                            
                                
                          </div> <br>
                         



                        </div>
                        
                        
                        
                        
         
                  </div>
                </div>
            
            
      </div></div></div>
      
    
       <div class="col-md-4">
         
          <div class="card">
            <div class="card-body">
          <div data-v-fde0cb54="" class="modal-instructions mx-auto"><div data-v-fde0cb54="" class="v-item-group theme--light v-expansion-panels v-expansion-panels--flat v-expansion-panels--focusable"><div data-v-fde0cb54="" aria-expanded="true" class="v-expansion-panel v-expansion-panel--active v-item--active">
              
              <button data-v-fde0cb54="" type="button" class="v-expansion-panel-header v-expansion-panel-header--active" style="background-color: #480007;
    border-color: rgb(244, 245, 247);
    color: #fff;border-radius:10px">

              <h6 class="h2 d-inline-block mb-0" style="color: #fff;">{{__('Overview')}} 
        <svg data-v-1a72eceb="" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1 ml-2"><rect data-v-1a72eceb="" y="0.5" width="16" height="16" fill="url(#pattern0)"></rect><defs data-v-1a72eceb=""><pattern data-v-1a72eceb="" id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use data-v-1a72eceb="" xlink:href="#image0" transform="scale(0.00625)"></use></pattern><image data-v-1a72eceb="" id="image0" width="160" height="160" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAACgCAYAAACLz2ctAAAgAElEQVR4Ae3dd7RnV13/f5Z9KSpWEEVFLAgi9i52DSr2XrAjKij2LoqoIKAgAhLAEAgJCRBqIi2ZhISUaSkzSYaEAIbB3nu/v/U4K89Zbw6fe2dcfv+497c4a+373v3s/Xq/9nvvfc4+n3uHO7z9ejsC/39GYN++fXe66KKLPvjVr371na+44oqHHT169M2ve93rjh87dix3xbFjxz7+uuuuew/upptu+m7pN9988/Fbbrllkddff/2+/fv33+288857R+7AgQPfcPTo0dtuuumm49yNN954/Jprrnnhvn377hiWBw8e/JqjR4++URp39OjR44cPH35U6eSBAwe+8/rrr7/xhhtuOHb06NGbrr/++usPHDjwrVdcccX7XnXVVXc+cODAR1x77bV/eOuttx6f7siRI8+WfvDgwXe//PLL3/Oaa655tLbmhMVLl0/+WZ5fveqX7n7u6/7aoT3apX2zvdqvH6NPb9TP8ug/HKSHDZzgFXZwhOfEF95wTwf0cezYMXpZdCSd3uiPHumTXrvvrpWXXnrpD1511VVXX3PNNW+49tprbzly5Mi/v+51r9u69dZbt97whjcsjv+WW25507Fjxy67+eabL3v961//F9Le+MY3br3pTW9a5Otf//qtI0eOHLrmmmtefN11173o2LFjb5B22223nXDque666y44fPjwEw4fPvzEm2666YY//uM/3nrzm9+8dfz48cXdeuutf3fttdc+4dChQ796+PDhXzsG4ePHt97ylrcs6fLefPPNbzl69Oh1N954483Hjh37Y3VUXjqnbTfeeOORI0eOXHLkyJEr3/CGN/xreUhh8dLlk7+y5VOv+t3H/dxXHum1R/u0U3u1W/srL6869FN/9Vv/4TBxgRO84AY/OMJz4gtvuMOfHuhjrSN6oz96pE96veSSS35i15JPw66++urbbrjhhi2Nv+WWW3RycTocSIAIDIBy0gBcHiBGRnnFpyjKSmHiK5+ipP3pn/7p4v7kT/5kqbc8pf35n//5Fvdnf/ZnJ/IqIzzTSk+qTx1k+cnt4pVb11nbKt/9hNVdn/Sn+5RWH8uzEy4T5zl4wzns1zir83aCLrqjR/qk1/379//5ribgoUOH/uSmm25aGnzzzTcvls/IAkYE0mGdD8yswDpMGZVJToVMRabMFP4Xf/EXW2tH0eL+8i//cnF/9Vd/tcUVnmnFrfMUX93C0186uVPZ8q3zqKt2Vm+yvpHrvhduIITXlNvhLA990EuY0xe9cfSIgPR6+NCht+xqAl5z+PDxm44dO2EBs4I6FABGWCNX53OlTwsTsGuCZVWSa6Wl2E3yb/7mb7b++q//enH82zl5Siv//0bOsvk3yeqUxr+pzeIiYiTV5/pPTjdx45/EDOdwJ6dOpNOX2Yv+soD0Sr+7moAHDx48Pqdgjc8C6qTOTVfHi0O+HNC4gAX4BD2FbLJCa6VOxf/t3/7tVu7v/u7vTvjFCa9deZOzrrW/PMl1XZvuV15y1qcPwvUlq7mp3xOX/HALwzAlw3qN/YzPAk4C0iv97moCXn3VVcevv/76ExbQKLKemGuQTURsNAIo0MhGciQUjogkZczpLmVN5VHiVPIkxd///d9vceKS+WdaZcqzrk+4cuUtvK6nOtbx8s96I1+yvmUhG3gTD/hMrLJ+YQrfsI5wyQhJ0lfrwCwgvdLvrifg0aNHl3VD1i8CtuiNgEmAAGFNvknAQA7gwJ/kSzEpjMxFkE3k+Id/+IeFfBFCuHzFTbkpbR036yxtxqlvhsuT1N7aPvtTH5MTB8SbA5R/TUCYZgXDPT2Q6SgCmr3o0TqQXvcEAY8cObIjAXWyURcImwgYgIEIYEQk5zRECVwWIsUJZ1EodpJoEgARuO3yTKKs69gpXL3rPO4z0zbVL09tz5pHROH6HAHhMfGZgzf8phXchH/kIzcRkF53PQH3X331MgUbMZssYB0nmwoioZGZmwDyT9JlDYGeJSAjHpnyKDKHCFP5KT4ykP/4j/94wjIVLi5ZuTWxqqd8ZH55q6981TPD2lc7a3d9mf2b/YbDxCQyrjEM22kB08HUy3YENAXT7+6egq+++viR66/3IPQEAduEGFU6l8mv0xOYRukEzwgGMGAb+dNPGWvrR2kpcK3QFB5BdpLylr72V09yu3zF7ySrozaviag/EbC+6vcmPCLkegYJ24l3OiCbgumpTUhTMH3S69W7nYD7r776tqNHjiybEBsQHWgNGAEnCY1AgATOmngsX1NLJIx8WYEUQmb9pgIjIMlFpOmf5Cj9n/7pn7a40oqf4YhTHDnzzTpmfPnFaUflauOm9kfC2d8wmFNx1jDsdiJis0/ky/rNKZgePQekV/rd1RbwwP79t7UG1PB2wUaUzuWMuEm+RuUk4CReoCJfLvCnQrJ8KXLKSZZJrMhAzvhJnvLM9EgzibVOX9exTl/XWxtnu/Mjpf7N/oZBmJBhlYRjJITvxJo/EqYbkr7aBdOhJRW90u+uJ2C7YA2fFlDHjLQ5Bet8oACvkZ8iIsU///M/L5aFhWu0k5RBCRTz7//+71v/8R//sfVf//Vfi/vv//7vrbX7n//5n61/+7d/W4g2ycD/r//6r1vbXZvKaKNy7qFebqdr1vEv//IvJ8opr3/qisz6MNten/RPPUip3/oPB2QTp151Vd8cJNIjMckhZ9NwuqGntQVsF7z7CXjgwPIu2AYEAduINP3W2axfoxEQOnn48OGta665Zuvaa69dXH4LYGSOKI38plxh5a1VcqaNnDROeyhtKojfhUAetp5zzjlbT3ziE7ce//jHb5155plb7o0MrllOWygxC6HunLj6v76vOhCNhZEGG2HxnDr1tbaT9YkMh//8z/9c8kZEVktbr7vuukXCMPzyw3c6bWAds4L0EwHdR3/qB2wOHDiwyy3ggQO3sYA1XCc4HdWxpt5JRBYQ8A9/+MO37nKXuyzuAz/wA7c+4AM+4IS7853vvPVJn/RJWz/6oz+6dejQocXaNRWxfJR03/ved+uDPuiDdnQf+qEfunXBBRcsZGMd3NdFeT/5kz+59WEf9mFbd7jDHd7KffAHf/DWgx70oIWck4QIq2+f8AmfsOM9tWneF5lnuS/7si9bLBErt64THrDICX/UR33U1nd8x3dsvepVr1pwQFhkfMQjHnECv3Ak3X+G83/Ih3zI1rnnnrvMHlMv9ERf6S4C0uuuJ+DBgwdvu+Ho0YUQSKgjXGtAI226LKCp46EPfehbKX5NhML3vOc9t17zmtcs062pF/g33njj1nu/93ufUvmzzz57IR0L5jKyP/3TP/2tyr7ru77r1nu8x3u8Vdy9733vrSuvvHIpE3H18VTv+5znPGcp688sd6973WuxQllZVvFU6jRAzzjjjKX/6nzwgx/8Vu0Nr53k0572tGUDNHWCgK0B6U5bDXB6pd9dvQbUQCPFyYlJQNOMNcbsaH4ktK75qZ/6qRMAfuM3fuPWk5/85K3HPe5xW094whO2fuVXfmWLogLzfve737IZQVwEdD8jXfpd73rXrZ/4iZ/Y+uVf/uWtX/iFX9j6xV/8xRNSnGnKWooz9X3lV37liXpZwEc+8pFbF1100dZll1229Qd/8Adbn/zJn3wiHVFNWZGFdZj31Qdtnff9+Z//+aUt3TcCVk796mwNCbfStOcxj3nM0o4nPelJS9s+67M+60R79PXgwYNL2Ze85CVbP/MzP7O4n/3Zn936uZ/7ua2P//iPX/K+4zu+49bXf/3XL1iw9NxP//RPL320hkwXJD21BoyA8KXXXU9AJtpuyVplEwEz9Vm+JCIBJYI95SlPWayF6RXBXK997Wu3PvIjP3LJ887v/M5bF1544UIERJoERBL1bXfJb/p1WeN1T8rct2/f2xQzFX32Z3/2iXy/8zu/cyLPJIv7GkjbXe6b1UVc93NvBLQMidSzzk/7tE87sUyoXmT98i//8hPtsXRBXpsoMiLL/33f931LPni9+MUvXqqQDz6suM0L0tEDST+bCEifyy54r6wBTSNAntOvjs21X+QD/pqALB/yGZ2cdY410vd+7/eeAP73fu/3FkARFEBZjSwKhQJ57dwLGdT/Dd/wDSfqe9SjHrXUJz4Fka4/+qM/2nqv93qvrXd4h3dYykQkZJlEsplCgO6pPJfSqw+pK/cpn/IpCxEizrSqsy/taLXnvPPO23qnd3qnpe0sG0vOtS62NBH+zu/8zhMEtATQLgSGfU8fJvki4JyGtYc+98QacP/tzwGtGTQc0EjIpGf9ImEgAIKCpgVEQCSJgHa7CPiDP/iDJwgTARHN/SIgqxFBFvas/riXyzrn7ne/+1KfTQ4r6oo0SYSkTBb3ec973rL4F3ZNIp3M8rKOOxFwqfD2OutLBNT3SUBr4NaoNjFw0uf5dGA7AsJ7OnpIJ1nBpmD9o0f4soD0u6vXgHMKjnwRMAuokzmd55BirgGt/1yUhogua6j73Oc+C2He7d3ebeuVr3zlYm3WBDRNn3XWWVsve9nLtl74whdunX/++Yt8wQtesJDH8zDX5ZdfvvWe7/meS31f8AVfsDxHo2gkYSmyWvxIOK9IPAnovqyMXfZ2960e5SbJspzuMdNYR89HXe5Z+dNPP33Lus4U/q3f+q1LexFuWkD93M4Crq1f+sgCRkC60549MwVbpBopRoyG68AkYCRsxGUFgTst4A/8wA9sWVQ/97nPXR4VPPaxj92ijNZr97///ZfHB8iCNKaIFFqeTRKBKdv10pe+dMtuV76v+ZqvWZSI7Fm+KbWPE8fSIKVLH5tKN92vOJuBudFYk8xarIvFqc5P/dRPXUglTT8RkPWzI69uGyWXaZdDwk1TsN2/9mtHFnBav8i3XgNqaxZw129CDt7+HFCDm4J1oCk44hlxWT9gAHZawMDdJD0PtPOjEGtDFnAS0Nrofd/3fbfe//3ff+v93u/9TjjhL/7iLz5hUVjICPi1X/u1i3LUGdmSEbEw8kXASRb3db95X/5539Z5k7itATcR0KOWb//2b9/6/u///mVDYaCoL1w+93M/dyGUmQLpLFUQkPVbT8ER0ACMhOmAPtINSV/ayDUFL7vg3b4JsUbwXK1NiA5YaxlVWb81+RCQcicBrW8ATQEttoH+FV/xFUt9FAlgzjV3jqyNNwAW0uIDkgRu5LniiiuWjYV6TcHqUm+Eo1Ttkr+pL5JIW9/Xg3BvIfQvxZFmAH1nOSsnLiu3JqAypUW0TVKb3c8AnK/ZkFDYmnFOwZOATcFJRIyE6Yre6gd90uuuXwP2HJAFpHxAI0Lka5TpbEQEAsVMAnq0YBRyphiPESjBiLfgNlU2ypFmEtC0FTEjzJRI5VL3R3zERyz1zk0IwiGhfKS2ibvqqqu2LrnkksX6tsmhoKZ+m58e78z75VdX5J/lELBlgbyTgHe60522LDdYPs8rOdbwGc94xokpXV/NBE3Bp0LAaQHTRboh6Yve6A+29LknngMioJEyCWgk6UwdjIxGHfJtIuDv//7vL3prdH/Jl3zJiWmnxyWAz2oBKath59iifm3NkIpDYMTa9BhGWvlIl4fSiHbHO95xy3Qd0daWrA1DBJ715FefaS3i1t7lRqtNiDT4WBroq0EHE5d2FncqFtA7bm2YU7C66SHSpSP6ordJQHrd9WtAu+BNUzBro3NztGUBjcb1GtDDXgB7rMDCPf/5z9+y82UF7TbtyigiSzQJ6HHIespMuaRyCOKyW256Q2AWbn1R2AMe8IAT+X7pl37pRJZprT7jMz7jxEPzExmGx30j9Cy30xTMmrNoLn3iDBz9zvV4ZlpBxJT+wAc+cGm3GWRNQLjPqXfqhr42TcF74l2w52kIwRnpawuoo5HRCNyJgBbUAAbm133d150ggddMrqY098qiIJLp/Fd/9VeXV09exSEN51WcXbqH16yKek1vkfBud7vb8irNIx5kfOpTn7r1mZ/5mSfSP/ZjP3bpl0HhmpbMfb3esnzofkmv50xh7unaiYBrq9r03BSuz5N8ETAriIg7EdCOe1rBqY+1BdS/dEmvu94CaqCDAZEPmEbTXAdm+cgIyNo56RIRvP+kLARkASjc87U2JN5KeDUXESySrZcqv5NkCVxZIyB/3ud93luVZTGyuNV1j3vcY3mOqCwr5NLPUzk4oI7uqxxcaq9HKpFMmvZU50yLgEkkRL4c0iFfa0Dp3/zN33yiX6y9drsXB3tu6gMBW//Rm3ZGQnrdEwQ00hHCKN9EwKzfJCAyzONYNh5IGQED2btNls7umHUxJSGh+3QsiiVaO2XEORbltZoy7hkJtYVVtSmJ5BFP2e/5nu9ZdtYIQomcOijpEz/xE9/mfvP+yrvvy1/+8qXMutxpp522bKzEc2YMfVHHTEO83LSCEZEF5GxGSPFOGDl+xbJ7IK+cGScXAfU/67cmID3S557YhBy6fROiwayDxlMSp2N1NPJlAS3e5fW2g2MxI1+7O4CaPmxwOCMTMYFq9CvfPfmRkuOXtzj1IVDrqUiYRXvRi1605eSJjRCrZcpGDFdlSE6bWrC3aO++5IxjnbqvNlfOOgyxIrY6ldNeOJWmnWviycvBIQvYWpBUj/ZzCOYJwnoKjoQZBnpKZ9oAU/q0tqffXf0qjomemxAA1Bkdi4QRsJFIIgaAAW4E24CYTiaglJClsI5LAZNEC1N2+KNcyp6Sxd3ukuYe3CzDf6rXrGN9L2Sufv55iZ+WL4zqe+RLhld4Vq+wgT4JCPcISCfpKJ3Rn8EbAXf9FGyXZK2gwUbPJKARb5QZ8TkAtCYJHKOU9eOQEHBA5RDTSM9RQgqhpKmswikgGYGE1/6ZZzt/ZbaT25Vbx1de/PSXLxn56k/hrGFYkPAJK7jBLyyzfnAOc/inC5J+6GkSkB7pk173xC44CxgBI2HWT0eNOhJIwGcR2pl6XJGVa+qbFuHt/lNHYOIIVxs7OMMb7siMjJEwK4iA9MZFQHrd9Rbw8KFDt90wLGBrMB2JgE2/yGeN9UM/9EOL++Ef/uEt7kd+5EdOuIc85CFbnMU0Z6fMTf+P/diPbT3sYQ/bIqdbxwn/+I//+JKX/1TD6zKVPZlUbl32VMM79WP2dxMeYRV2E88wDnMnqK2nWUd6iYARL/0tU/CNN/p9wN29Bjx06NCJKbgNgc4YUQjYQteIM/ocV3cg4N3f/d03Ou+E3+7+dxjAcmK2HbZwdx7Se3PGAPnoh56ygKxfmxBTMP3u6k2INUKPYSxe2wnqkM7lEJDpl8cng3a+dmrKMvWkDnv46a0HZ6QaiQDh2tkCiSvsnjnkn20IWPENjOLIXOmzfHGb8myK677rcvKK21RmxlW+vpCzn7PfYQIfOIUZ/OA4cYUzvOHO34yUbsja6J5wVa86dv0aUAN1SoMBFIg6NC1ga0AL59Z8p76yeXvO/ysC1oZwtxa0K2YQNlnASE+f9LrrCWiRaqRMC9Vobw3YgpcFlK+Ppx0t6qNqnVUPlyXMGiaBonwyK2DEcutwFrKBkQVZy5lvnbYO/7/Km6LVr87cug+FyfpNsnjhQnJZPhjCk9ULY9YP7sKI126Yfz0Fa4v7qWfXb0KsEUyhGpxysoK295GQBfSYweeD7/Iu77KsA61Jpl/47e7/LQZrfL2hQUSPbiJfD8gbFBGQXnf9GjACGpURcFpA6wsdRUCdduS+nVm7tXZvm3a/dn1zh5h/04507jjbkZ5MtjP2XfFOectXnnW4+GT1nSxf+Ul5y59/yvo+ZbvinhTYEU88wzjM17tg+tlkAelzTxDw4MoCZv2Q0MhCPp1sGrb78uR//Qzw/7rGeXv5t0WgdV/PAuHec8D0QmYB6Yz+pgWk3129C/acyNqj9Yk1jU60CZkdZQWtPSyCPZ33LMqT+17BISe3fgPSK6jegsw3IQCd4d4wJHu7kCyeMtbOAn0dJ3/x1UHK18PddZnyr+O796yHv/ikPq37Vbi3IWHSW5HeiIShV5phC+feOsGfHqZesoBNwa036XXXPwc8fPjwW52IRsCmYCOL9csC6jhnM7ImIcAiX6+WgOp9Z2CTFBER+SmQzL9JoRRbPBl5Ish2hJEeKcorPP0zXHxy1pt/tqO6p5TOzT7xRzz+iQd8Il+4wTECTvLBPR2YkdINPfUYhv4Q0KMdUzD97m4LePjw21jApl8jSyeNNk7ndXwSsFHq/eUkIFA3EZAipjJS2Fqm1MhQWD7+rrV/HS5f5db1lU7OsjM+8ilbPfKu61r3oXCkm32PhBFwkhCOvVeHb9YP7vCnh3RCP/TUNBwBzWiLBdwLBDRS1psQHYqAkbDOTwIaocAyYqcVBKjpBcBcpCOzCGRKSm5SbHFJ609nBJ3XE+fcnF9BEK8enwM4IY0g0uSVJix/9SAZa+Gjer+iJY9vj/1s2m/+5m8uP7Tk16z0zzqsspVfh6u/viRnfycOYTMPJWT9YOm+mywgPTQFbyKgNWCbkD1lAdsFzzXgmnytAU3BXAQE3NoCBvAkIGWkkMiYosiUO5U5FY0Irq/6qq9ajvwjjR8i+uqv/uolXjnfevi1Lg9upcnrUlY6Z4H/6le/+sSvUfl1LJdvW77oi75oOfbvtZfvlU1vrsrO9mzX5vq07qtwS5CJz9oCZgXhG9Zka8BJwvUaMALuGQvYJkTDW8i2CVkTMOsHDFODKSILGAE3WT9ky0XCJGXxp8wUnBKnjIC+C4lkjuf78s1luvycz/mcrW/6pm9aCDjT1gT0cxm+RfnwD//w5RGO8rVDH5DXdy3ao2xT8WxP/tpMique+pgMg2Qk3GQF4TqnYJjDv6VQVjACtoHcswQ0HSFga8A2Ia03jLrtCJgFjITbTb8Bn4IoK6WlzGRKLQ+r1YUYvp9g5Xzw7XNNF4uIdN/yLd9yIs2vUbkmAVkzebXTL5h6DudSn8uvWfn2+Oqrr17CtUW5/LVrp/bXF/2t7+TaCmqHTcjEcTsCZv0iID21BqS/t9oF74U1oNdAdk0RkPXjJgEbdaYAJOSygK3/WgOuLWCjPNBTRiScCtxOueJNR6QLqZAOqVg81rDr8z//85c0hOVHxnk1lYpTp+9KPBx2ISCCmMb9rK4LUSuTrM3btTdykrO/kS9MkllABJx4ZgHDHP4I2EbEDEVP6SwC0ie97ok1oE2IBlu49hgmK6iDXJ2OgKYDyuOagicBIyFguUY/ZUyXhUjKlz/lUjpi+KjJWs+voVqf+RkLlw+ffPR06aWXbr3iFa9YfkHLGwOXXyf1He/FF1+8bEz0M0soXT98BOS8XZdfePUVn9+zcc12TAIWT9bm2f7iZn8jo3xhE/lgNgkI1zBu+p1rwHST9aMz+qNH/dwzj2EmAa0fIl+74Ex9U3DTcOAAimv6BWQENMKzfJEwxaTAGaYg4dKSrJnPPH1q6ce6fe9rEyHeGtY07OdxvSv1ZRpLgGjf9V3ftcTJ/zEf8zHLL+kjFSIpy8Kwdr4DFjaI/KqDV18u1i+C1ZadSKj95Z/9qI9hQMIFPpOATcNhGsYREPb0gHzphZ4iYeu/PUXAuQnJAurQJKDORkBgmH4DhxIpDnhr8jXFADxLQBnTPxWVkteS0l2IhXikq3j39nO9fgrNPUujMEsLg0w/WRBl3DNJmfoijAzyk5FPW6St23SycKSbfc0Pj7DZREJ4wjWM188C6WMTAekvEurvnpqCNZ5is4CZeMTT2Tn9RsBGatYvElJgABvp0wpSQpYgJSU3KTXlk/MqXpl5sWTS1vnLI782RMIZXxl1yDfvsW7bdmn1JVlfZ7/DJIyygvDj4Bm2SDgJSA8ZhHSUBaQ/etxTFrAp2Mg3enTAojYzHwEtfJt+AWKEAqm1H9A2WcAUEAlTzCY5lS69MGWvXemb8qzjhNdu1rfOP8nlPjPv9CtXOyojvJ2DRTjwrwkIPzhycIUvnCcB24CkF3qir6wfPe4pAjYFa7hOZAGbgnVUpzmjb07BjdKI2AgGZOBOwJuCskAUlX+SYJJlKjy/Z3KbFC9d2qyrMmT1zrji53O+ypPuU9qmcus6K1O/6mN9nwMyjOAVdhEvbKcFhH+6oBfkm2tA+qNHG5E9MQU7McsCanDWDwEjX2sNUsdZQKORA0wgZQUDMQI21QQ6mSIoJhKlxLWUPpUuPcLwR4zqkVbcrKs6Kj/rKG5drrqqpzLVRXbf8qyldK4+TxzCBgknAaf1g28EhDn86WHqJRLSW1aQPul1z5yIjoBzDYiEddRoW68BAdIGpGkDAYHZGjCQJ/DTMkwFTj9FFk7hKTciCOcvz8nkrGOnvDPfdv7uXTvLN8P8Of2eOIQNAs41YFga1E2/sG4nTA9Nv/QzLSD9tQlBwF1/ItouSUN9o8B0R8BpAZuC1wQ0MicBI18EjIQAnpYva5BiUljhFElOkszwOo+w8uWf6bNc6ZFn5iut9qzzlL6ub9Yx+5CfrM9JeDT9wikCZgmzgvDNAk4CsoKRcFpA+qNH+qTXPbELtlawaDVydICLgDq3tn6A4ICzJmAkDNxG+ZqAKYfypn+t3JS+Sab4SZTyzXryl3+Gt8s/8+Qv706ye8w+5Y98JDzCJqwiHwwnAWEc5pOE9EI/ETDd0SN97ok1oBHSJqQ1oI70HLBp2IhjATkgZP3WBARiFjBggZ2bSqCYlEvOMCWnzE1pm0hgDdc6blP6qcSdSh2zPbWxujel6dfsd1iQYbSTBYQxvOGeDloH0g9HX/Q214B7koA6YUufBWwNSNb5CAiUdr9GbNavKYU0ygE9FZA/y5AS1zKlkjNNeBJtO/8sXx1TrtOFt6ur+HU7qm/GT399rM9TwgU+E6+sYBawTciagFMvWUB6o7/WgHuGgNYKcxOS9dMxHWXqOaOu54BGJTcJGAknEY3wSLgmYsqZCpv+SZB1fIRQh7SZd5O//OUtvClvcfKqX7j863bMvDMtf31cExNQcD0AACAASURBVC/ywSfrB7em30nAsG76bf1HJ/QTAbOCEXBPrAH7gUprhp4DGkmRMAI2BfcYpik4As7HMOspuLUOSRERMeWkLMrMv5YpOnmy9FkX/yTQOqyu6k2u6z/VPOWrfH2c/Z54rKfgCAhPDr5NwT2GMRNFQvppCu5hND32IHrX/0Bl3wXPTYjnSU3DOshN6weIHsFEwLX1y/Jl/ZJZgqkY/hQWAZIptDBZ3nWacPWWVt5ZPv9MW5et/E73K636ClevtuhvbarvWb8kbODV9DtJGAHDfG0FIyB90VtT8AkC7vrPMscmpLcgTDpLl4nXSaMOMEYjMAILQJxpxMt7LkCBCnTvVTmXEyqAZ5HESaewTZc8EWGmp+ip+OJS9kyLECeLq2z3XOef4bW/e0y5iYD6Lk+X/mcFw7TpV173ga0ZB+4RkB7kE0dfZqxISI+WVHtmDdguWMN1whpCXGs/EiGZdp0Fhg6LBwLCkf6VlhPEAQdY8co0LZgugB6olKR8oxfZ3V875ENClzr85yMDwUUxkygpfhMx1nlneNZR2XVdhWfe4qpLP4qbMlKT4WKQHjp0aPmdF+XFw6q1ICKqAwZO+MAMRllB6Z7z+SgLrsjYNNzbkD1LQCPMz2/4hyv+OSCrp8OvetWrloOd55577gLUgx70oOV/cgATGf1fYP8liHO4E1EcIlXOv8TyL7s4/2FTvC/V/DNroCO+bzwcHlXetxj+vRXLykr6z+GO2d/vfvdb6vDlmjomYSLCjKPEwjvJCFOeyiXFr/2FydyahJHPQOLUI+7Xf/3Xl1/V98v6T3ziE0/MCpEQpgazc4n+0aN/9+XHibKU/h+KD6eU95/YDXrkRNgexexZAhpNT3va05b/VfHABz5wIZ8R+uAHP3iJ+8M//MOFNMjwa7/2a4s1coL4nve85/KLTn7VyX+LdDLZJf+9733v5USyXZm1icvnjoiJqJQCYL90f6973Wv5lJIFNl1biPtPSr5aMxh8teZDIm3qZHPEmTJSzLjt/CfLuyld3KyvPFPqV+Tjdxl4sHKq26/NwsaPDRlQCKZfBqVvXvxfYTh86Zd+6TKo1U0/ToX7HsavX/lvov5VrsHKCu45AtqE6EiPYXTQP9bz77WMPj8Hhjj8/nfFs571rAUg//X7t37rtxZQ/dNnp5H93w5Thg0LMF1nnnnmYk3Fu4+p1KUeVs003uXbXCebTfcu1s/U47NK33a4DwJTUgRI4ZMM/KWvd7/lO1l6dZQvuVM8knHyTle8PvVZAb9+6Jf/7uSCmfaaXs0E/om2y3+al4+V852H/3NiJnL5T/VwNBUbzKbgHsPAe/e/C779t2F0wFSIgCyRj344/wHpd3/3dxcSGHk+ZTRCI6CRC2CjGVEcfZcPoV2A8m9cTa8+HuqfGj772c9+GwKyCsDUDhclupDU1C3Nv3ZloVm/HFKk+GkVTWVcZJj5KVpahBKurLpKn2XLX9q6rHKtW+VRtjjSxXp/27d92+K3tPHvbOHrUtY9/C6gAW+N53r605++EBAOZhgE9M/BXU95ylOWpQkjYeC2BqRP1nP3/zbMoUO3GVUIEwGNONPoM5/5zIU4/vcaqyhOhxHQtMACIqBj8KZQl9H70R/90cs3FsIsnfIHDhxYwLHGdLGMRjVr2YWApnbTiAshjHrWs130Ix/5yKX+NiORgrIRQpjy+cnppJWeX77yul/EqVzp8pde2fIULq+2SBNGvEioTywWK+8ybfpgyprbxSIqZyq17DDYXb5XgbclCIJZujASLksT07CZBUGnBVy+itvtj2F6DhgBgQIkFg4hWS0f7SAFEKz3EJBF888FXf5NF8unHGcd1xQBRCDbObsoy2VUm2bmFOznNIxuU4gL6ZTzkRFrjMz9IoKp2U7SRiaLaZfsX3RRgovitNdloPjHh4Ut3OWtbOHKzrwnK9t9GzjKPv7xj1/anxVEQv1hwWzw/JPE7/7u716sukFmgFpzIw2i+zF4uD/2sY9d1olwRWjTtC/+EPS3f/u3F6wf/ehHL+RE3J5i0CeruOun4H6itwfRLIuvz0wLrJPNhKkASJRnV+vRCr98gEUS+f0aASvJujUV2c3Ja2oHoFGOhJTG0tpkCANdG+wK3UuY8ij/8OHDyybI1GUqRhrKZHX9Z027cPmsV1kE1kC6+pGWX30zLO+6rHBltUNZ9SorbNmgrnVZ7ei+8nef+pAVjIQ+EfVJKcIhnssnoH59FgZwogcDHKYIBuPejuivttqomBGyfsgXAdVjDbjrD6TO0zAUaxSzSqZKHWMRdRwZEU8YQVggllCaUYlE1jQI5iLFRyKEnC5LmHLkK44CshxkV3ULVy+/aUsYOVzqmeWaDpfE258hIsrMiyyF3b+Lf4bVWzsjWGH30Z8u/vqcv3R5OW2Gk3h+fYQzfKWbdt2fhLt1Hh0IpxNkRUqOBadHFnBZA+6FX0bQ0DYhOsCUI5+HwsjYmxAAcEYjECInwAACvIgHVA6QlJCUnlJICj2ZowBKRhpKkT9iFBbHz0mj0BkWV1rlZ3rlq3ctN5WVp7ryu6+46Waf88vHwWViZVAbyPDk+OEMcy4SIiLi0Q9d0dkk4IlNyF4jIBO+JqBOGm06zTICwZTKAScCBljEAy7AuekvDgFTGJkSp/LEpXyyNPFrF6GSpVeGFLcOi6tMsrJTVk6eypDFJ8XNfulnfU5OPPg5uE3yNeOENdzhTw/0kXFgICIh/bGAe5KApl8W0EiaFlBnuchnJEY+UzCgJnBGcYBOoKflS0EprXBEnIrNPyUSVFb8yZy83eN/W07+SMc/77Wuq3skSxee/Z9EbMDCbVo+uMLXIId3FpAe0kkkpK8sID3uKQLaeWmwhreQjYRZPx1m8nV+TUAgTeAmAQM3wLN6KShSUVRKSmnJmWeT8iNHaZUjK5ssrXByxovjtiN59a7Liq9/sz5+fat/YdEgDaP19AvXNQHhTw+TgJEv3UXA5THMXpiCNbTHMDqBfE3DEVCnm4IRMBdITcNABGgusOfoz78mYcqb8ZFhk5xEWKen9HWeTWQ92f3WdazvJdz9Illliq/PU4ZNWJFZwawffMOaRMDWf0hIP02/9NYUTJ97hoC9o7V2iIBNwY20NQFblwAq8pGm4gCd0y+wUw45/SlJ3FTcVLT46VL6lOvy1RXpktVbuHqrSz35k+WZsnrKk1S+tpBzYOWPfOS0hPCbePKH9XYEbA04CegxDL16yrEnfqRcgycBES4gLH4nAY1KQAIc2YQBZ/RSkDTxgKVkO1hxHMDb0aYoskcZPcLoEYd7rNPkUW9kmIpfxxU+mawO+SLPjJv+2i2v+NJmm7pfeWf/pz8iRsJwjIh00C6YHrhpARmI7Qi45x7DtAbUQZ3yK1RegzH7QBCPZEbkZZddtvwen3ggWwNKQ1TpAdv0EeiUJa9yKY6UH5gGgZHcc7nS1Kt93pKYdig4CybPdJMYxYuLWJGjtOSmcqWtZfferkz3ICcJ+RuIYYR8ERCGHIxa3pAwhWU7YXg0O8GDviybzGCtAfcGAcdpGA3XGQ33istrMc4PQNqkAE6ap/POot3nPvdZ/NYbCINUzgI6guWhKueVkrcE/JTo8irJqz7AerYnzXtgr5ecGXTowC+WAlyaQSDNe2LOz+myENU5yTEJMf3liTiFyZlv+mee/JvKl1Zd6pgu0iUbjAi4Jt9260DY/m8ISCfehOz6wwjzXTACMvle/ThQsH///uWwo7NnDoECzvtT7yileRfrXbEfgQQ+Qjlg8Bu/8RvNpMtP5c6fzzVCnfR4n/d5n+XAaxm9vvMO2cEGr++ck/Me1CUN2VldwLKC2nIyMmgTpW9HKvHSJ4F28ldPcru80tfOfXKbCJjlSzYFZwVZwDkFz2m4jYiZg6NHOO2Jd8ERkIXzDBABHXfyS6P+AZ/3vTpjSvAO9OM+7uNOnN5ADj/mLU55I/r+97//coQrYvmd5X5rWZyDCw5QepfpH/GxYq6OZwGZghBbHpejXve9730XIr7oRS9aCEr51oY7kQFBJxEmYWb8dkQuj3LTv66ncHkivXB+MuIl5xTcxi0CwpsuWgMiYCRcky8Czrch9LHnCGjkGEE6aBp13NvP2jqzhoTOqZl6HUhoY8BiyePAAGBNrZ1vQx4nPpzsdSnjVIsp1GkY0zuL6Hre8563dde73nV5wc5CumdpL3jBC5a0BzzgAUv6ox71qIUQpv2UP2VEWMedLKzczLP2b6q3PKWRkS6/8HYEbApuDbhpCjb9rqdgOkI8br0JYUj2FAFv8i749t+G1hmnX5xOpmDTrNPRjt8bgY5QOaSKbP4jkQOWzqcBgjIc2cpyIZZvPawhXdaPjqP7nsFJDj8sbnp1Oe2sbt+hsKKsZBfr+IVf+IXLFF/ctFopf5KBXzwpb9YwchQ385W/uBnufuKqQ7513ohGlgYr4dKygGTrwGkBTb9cVrBNiNnBOnDTs8C32YS8/vVb9Lrrj2Mtp2G8Cbn9h4l01lk2Vs2BU/+yCmkQxXSJfAjp/+k6hn+HO9xhyd9mgvXzfzesA20krCWtH12Oo1sjsrKA9EPgDlMq6/Crc3LuwZr61wnI6EJA/7PDkX/Hj3xPQmEGyCZCbCJGBCqtsPKTaKWv65358icrQ0YyctZRfORr+hXOCmb9It8kIAvIAMBtTsF2wmsraCajzxv3yr9pYJmYbA03kphwG5H+GYx1m1GHnNYkwv73hs2HI/KsFxIB0hrG2Tn/w0Me3zU0VVpbdpQcsUzpDlUCnqV1jk55l6P7pmWEtPb0j59ZRdZU2+Sr3kmA/JvIUdpanixv6WRlixNex0/y5ZcnEka+tfXbiYCRLwsY8ZLzbchCwI7k7/oH0bcfybezRDzOMyZgIZvRaJQ26oDkYkGQDjkuv/zyhRDydiFO68RGfWmk+uVxSUcmF4Wq26V+YXJ9pfgsWeWE105a+SdZTqXMrL/81VdadZLT6VcEnFL5LnlgmhU0sFg+Try86jT4kc80TBcsoryIyQJGQOtmOqTP5VXcbj+SbwrWUA02cnSAXJ4hHT68HCHXSU7HTZ92VxzLCRggAQvhbFY8LmFJXYAHsssuzSMWgLlSZAoMbOFIVJq6uRkvrfTqKj1ZfHVHhBlf3uRM6x7dJ1l9m8KzTH735dxDP1h8g5dfnjYhEZB1hJuT4x55wRfWCGig+/bGJwz0howREPno7wQBd70FXBEQ0ew67UR9TMR5HNMbDg+a7V49EPbQuCkWsD5cso7znNDH5aZc8SyYxyceMPeBuqlYfAraJNdEmGF+dc84dRQvbdZZ3plnnb7OU93FFyarp7hZ1/RHeHG1qQ/TPVqy7EBCZGsJ09T88Ic/fFniWOb4HhoJ5fMfoeaH6Y7109t8E7KnCMiSaTDrZ9q1hrN5QBpktCGx7jPyEO8hD3nIYv18yMMimkp9rW/zYQMDCP+DF9nUC1g7ZW9ETC0+sPFth/g2EikthZKUN8PlSanrtMIUnbIrE4mE5duUXh7p5atO4e67TtuunfJNx+rPD9N9DeeBu02XwYhgLCA8/RoEHcjv2xQP6VlC9Xmy4G2UWQoR/UoF65gVpEe40+ueOIwwp2AdsQFgrfiNOF/AebRiZPpCzQc1LB8AbV5cPqjxDBCQRrRpFiktkgHrGZ4dsA2L6QPQ6p7K5I8E6/hIEznW6YXduzoiT2WLJ/Ov8yh/sntUtnuWv/vMeOTUT9Lli7n+tax4n2j2YXrTsHx2/P2fY0aBPjw7NeDNTn11aDAzCvRgidQSak9ZQM+LNNjaAelMpR4Ke4DsI3PTqrUbIDyjM2o9ULbT9SDa5eGyL+JcRi/w/KZJH1cbnR7dANJrNaC3i400lES5WcUUWj5heSdJZlnprIc6Zl3C1VvZdVjZBk8EKq+wNgiXVrg2lle4/PzakYPN/DDdwISRWcMlHxK6YNW/o7X58FKAYaAnS6CeJswP060PEfTEGnAvWEA/YOh5kY5ZwCKgtZt/4uz3YDyAfu1rX7uMYiTyoNmzQJcRDERKF2dkAoFyPfvzTwWNVHmcrBHvsgYyvbCOLvEpjp8yiyMpu7C0lD3z8heuPBlRpPFXV+F1XvHaIp7jF8cV3pRePdIqQ0ZY5HKxWAahC9brD9Nh5fJ4imVzX+tvD+lhCV/LGUscl2WNadiyRz4EbBdMr7v+Byqdlrjp2LETBLRGs+DVYYRjFaz9gGVa9Y6W86DZdIKcLgQWz0ICxwEE0zXA1Gl69lzReoZV5TcNq78PudXTB+Lqc/XRN1Bd8vZxubIebheuLAvgKlzZnT5Ut76aH6p33+qa90XiGe4+jpK5vEXyCtK0qI3Ih4gG6vww3f2QEXHkc3KoAxi+NUZOltD3w9bT2oLo6w/TkZWOWgNGQHrd9adhegzTYVTriAsvvHB5AyIOgQDUE3i7Nke1PIQGIMsGXCPVg2UHDJDPRsXasinRTs1PuPm43K6ackozBfWmxaMJo9pahlIKG9nC6w/GtUdZae5vrcoaVFa4gVTeLKHw+mNzZbVru4/N1as80tdm951tVhaZEEFe+HCIqO75YTrii5Nm4HsHLy+iecxiWcN5tGUNbjDrj4FnGcQQMAxmExhxsKO75TngXnoMAzCN1xnPlnSMQ0DO2xBTBLBaWAtbG3JICMymEX5rmtY1rAMQu9TDdQGegl0UV33C/NK7+E1xXcLu51KHtMJNjzOv+rrmfZQVdn8X/7xP0+qmsspIryx/fYQXVx+kaZerzYd7i0MyePKHn7IetTAI0swejIW8JFJycwreEwT0srrHMAioAx4iR74kAuo8YpqOuYgHBM40ADAgByrC5cQDFfgphIKmoviniwDKcsIcv3ybwpUvjXRfsrQZnvlK716Fycp37+IqXzyZ07/Z18Klw8aA5cIMjmGKaPxwR8BIyBhwjAUd0dmagPS66w8j9M8KrblYP1OQjkTCaf0QMBDISBj5gJULUOADea2ELEOKSKbwGZ7+qfTy7iQjR+Qp73bxpa9l+YufbZp+6YWT9TUZFuES8cKOjIQGOZwn7vSAfOlmEpD+6JE+va3a9b8N04FUDc4CrgnIxDfiAmJawggINOBFPgADlwM6BVBKikhBydLXSkzp28nKTZJEuOIKV8c6vvTia2f5t5O1nZSncjO+uNpJwiNswglukS8CNttMC5gu6AUJJwHnFLwnDqQux7Fufw44CbgdCW1GkHAnAq6BbaQDfiohJRVfWoosnRS3Tq9c+eRBIOGIVFzhmSZOenlKE67OeY/ixeWXL3+yMuSsh780BIx4SbidjIDwR8BN5Ns0Be/6NyHTAtrmG0FNw0aWNYZR1qhj/oGAgE0PWcBkFhCgwM1lBZMpJ8WkwKR4/pxwRCpPZIhMaylfZWZacdU90ypDRqLi5Fu3S1pxycoJc8L1O/KFSwMWblm+ZMsceMO96Zc+6KU1IPLRG/3RY1Pwrl8DaqDdkm37tIA6Yx2og5wRp/Nc0/DchACMm1NwwAIa6NNtUpA4jkJzKbRwsvgUHKE2SWXKn7/wpvzFVXdluveU1VNcfdjUv9n/SBhG5KYpOIzDPB3QR7qhp4xGU3CPYXY9AXsO2BrQAlaHjLZGn07rsFHHD5SAB1qWD/nEAzcrSJl2nJGwRw3yUJKwxxbC8s5LfCRIpuhNUvniI5Hw9FfPjJv+8lfPJlkdyXUe8fpTHycpxYUFGQEjHwybhuHaLIOAdMLNKbg1YNMv/TEk9LknHsNsWgPqgCf2Hh57qKrDyIiEwAGGQ6gOGwAE4Fk/gEgHLIAbuQEvzE9pyqnX9MKvjFFt9BrRyOkq75RIk+IjUFL89K/Dp5K2Kc+8v/Z2/ynFc5GucP0Xn5/ksn6ThPBEPtjkYJ0FpJMs4NyETALuidMwTcFZQJ08//zzl1dxzvU5CeMNhjcXwHIEyJsOZ9R8jumVmpHGWgFq/WG6NwSch8II6R/QOOnR5U0FJ90H6N5zegfqIyRvWrQrEk4CTKXnRxr+SZ7iip9y+rcrI890k3izbnki21oiXVYv0pHiuKxglg/5sn5ZQNgavAiIfAb6XAOatVjBSUB62RNT8HwQrcNed/kQyYkL59H8ALmPk0ylvvHtw3Tn2JDFu0rKAJIjV/J2OTHDuYAtvw+ZOs3hXBvn8lrMvXz26XWV96SOcVEQaziVPP2RIiltTQ5xlck/5cxfPZNIlS1t5pcmXFzlEI8/q5eMjPoVAVk/DvlykTDyZQHNRJN80wK2BjRw94QFvPbaa08cyTd6TImO/bB8zu0x8wjn3aNpcf1hug+HxOkwMHf6MB2w3muycuo01Xt37HxhBHSyg2JclgAOuXrZ75qEiRCUOgkQEaZcl4sop1IuEq3rKLy+v/gIOMnH4q3D8FoTcL0GbImCfLnWgHMKRkL6QUB6pA8WkH53/a9jIZoGI4QOO/h4l7vcZfk43LFxR7CsyxwM8GG6AwiAZhFNm6yWfzcF5E0fpvePWYxo1tAnmIiHjNIcbnCdddZZiwU1ul2mFGffWEQXBbrvJFBESE7irf3lqY51euGZb/qlC0+C5S9fYcRcO/hwSDf9m0g4p+EsYOvpCDitYJuQaQHpddc/B5y7YM+PENDxe0TzkxgskinWJd2ZP59FdjkKJM60AHxktebrcvq3D9NN745inX322ct6xnR8xzvecTnMKr8p2P3U43Iw1ucABodrKjk/GTHyF04WT6p7hqdf/k1l5JllN4XXxCucREakS04CbloDbkfA1oDrabg1IAL2HHDP7IKXX0a4/bdhWCkfl7M8TD4L5wN0vwFjo4Bw97jHPbZ8MOOwqoOrCGmNJt2Roj5M9y3v/DDdSPYhujWmi2WzHmwKdlzfB+j+iYuP1u9+97uf+H90ESMCrUlQelL6Jn/lN6WJKz5Z/vX9hGdafhLJyPw7kS7rh4SnugaMhFnAyJcVNJPZNNLrnrCAbUJMs0aWjYeNhJGENH6LxbQJpCykjYMj4/3rrgkggplq+zC9kyfWN05bO9vWkSXW1tSLwKZ4R/tZTDtvJ4CV7XlgJFgrXzjyrOUss6ncqZaNYLO+GRfhsnKFSQScTp418SZ+jEAO3pzptzUgAtJTb6oioDWg9R89mjX2xCZkeQ7oSP7t/6wwEhqNLXJ7PGDtAQygAiwSAVc80IDrkoeyXAHec70l8vZze5v8xZGTfGuldg8y4kWQwmQkK22G1/lKE7/pfsXJ1/1nvbAoT+kzDAv5u4RhDeOk6ddypbywngREPoZBPvHtghGQ0VgI6JcR9spPc1grtAlpDeEne5l0Zl4HmXTSKAQIsjl67htVYAAVIIAEEAABb6RzwARWOzT1KUfRLuX9uyoPvk3lxYmfCtzOL195yTWxZrmT5Zt1Va4yhZPlnbK05LR+WfQ+TDfApEfApmH1wcoSiB5gmAWEM/30YTpckS8LaAqmzz2zBmSqEUKHdcaUaHdqFwUQO1xTqmdzAJS/h9G+cHM0HCDARCrrt34lFXDARNqHPvShywNunyJ6XujHh5CNZVXG13ec4/ymGfXtpFgKlp5EuvJHwMJZpvILl7bOWz3VG5GmrOxayhPhym/wceqV1ofpNnqWK2YGOGUB9ds3Kf5jum9zfDnn2L88cNzpw/RISJ97ZwoeP05kKrWRQATW0KUjiObhMcBtGvoXrMjpgXEPo1k+5OpXUoGGtCwm4vkexOj0qg/JXNaRHuUADZHV5Sd7XWsFz3CkomjxESkCrcMR4n+bf5J13j//rI+/dk3J79rpw3RWEFFhZlAzAqyYJwveMOkPfOeH6TZ1fZge+UzDe5aALJiNAULY8dp8GLEeh5gOdM53wX0YDVS/EygOsYA3H0YbsYBDQD866fWaTzZ92G7x7PIw227aw27vmJvSI1KKnlJaChYfufgrR0438834mX/mye8+5RG3nStPJKx9hfXV13QI5EI2g7UP0xHQYDXzsHx+mcLFShq8pmCE9ITCUwkXY8EAwN5yyfS7pwjou1EnZ40Yjaf8HkR7qGwkei/rG1/kAEAPo4HFzYfRwJ4EREiKAa7Xat6atIP2hqONiZ8AoRhEJrVFmrLuERm6p/uIk4eMJJVRzlRW2cKk/OLnFC9cWek73be65n2rS7tmG7UrhzDzw3SYmF6RyAUr9ZgdPFvto37PQxHVptC7+PlhOmPheapZytrbMgp29LmciD54cHe/CfGyWuM1WONNwUacKdZCGSE9NgGIRa9OGp3bPYy2jkHA/qP3guztH2H7ur9veMVHEJ8mIrbL6GVtH/GIRyzhiDCJsxOpkCgCqJ9TdtaTv/sXrmxhklsTUlz1zrTyFpflmwT0YToyuUyn6w/T1WEq9V8BPLJy9R/TbT7oyKvM8PXQ3zSsjE2idK4peM8cRvCzapRvqjQiWTlTAaAdOnA4wbTp8isIfsHUP1TuYbRnhS6gGpHWkMDxEbV1ImUA3nThl1eV867XZcPix3eQ0zfCrKATOa5NH5P7ntfVx+MeO7jsyk3xFOCaZW125sfk6w/R+7i8sjMvDCwPum95u2/tgJ9L3n5uY5JQGzZ9mG5qhYW1L8wNhP5jOsLCg06Q05LGg3okZATg1ofpSNhTDPrcc5sQppuFs1BGEusKFpF18tO4HpMAAMlsHDrJYhowOq1pENgvI/TxOklBlGitY8HsSJZfO/W7MuLV6QCE36KhBK/qKIsiKH2n/1yO5ECX14NsR7usLYVZcq/3+Gdd6u4jdmWFZ1nheV8WVbiP2PsQfX1fj0u6Tx/LN00jIqfu9YfpSNt/TEccZTwZMMA9bUAwGza6gLP7IPn8MN36r01IU/CeI6ARrPEU6HEMqVPWHohlpOooIIxGYHBIZOqVR5jCAM25AG99U3iJHP/ZXPnyKesSRxFdpjH1dEmjbFd5q1/8LMs/w9o+y86weOGudVnh2qut2lRdhWdZ6dpucHL8TvT1bwAAD7ZJREFULveor7ATr/0GIxzh5V6wJsX1BsSyCM70Ij3yGRAsOD02Be+JV3FtQjRcB3QE+XLWFjrJOnKAAAJLCAgSQBEQiDlAcoEfkVJM4RSbEoVzlCU/V1xSGiecUotTV2kzf/WUts5fuPTqJtftmHVtStM/LgIm1SUeTj3/47cxCcvwhDWDEAHpIH3QDT2ximsC0uuuJ6BFqoYy/dY0CMjqcTqmg72Si3yAAAhgIuKahIgJTOACdhIxJUTKFLeWkWYqfio8Jc64TeSRLzLNvLP+WW7mRZJ1+do5yxe3lpvIFxaTfPDiIh88uTCOgJEwnUTAdEZ/9Eifyy54t/9GdL+M4AGwNZ8p2EjSIaMqAjbirE2AYDoGjikAUGTgTfJFQGCviUg5uYgxFZiCSytMznz5Z/rMwz9JtQ7/X+rvnrWhusj6Fgkn8cIDPlnAScCJK5zhDXf4ZwGRkH7oib7ojf7okT4RcM/8MoIRo+FNwZFQByOhjk8CZgUDaxMBAzqZElJO1jAFptBkCi1MlnemFVe9pRU/y+efafyzbOW3u9+sI/86b32r3voeFslNBGxQIx+c1wSMfHQT+ZqC6XHPWMDlNMyNN77VFKwjXBbwVAgIqKaNU7GAKWUqKUIkp2LX/kmQ0iqn7uLI4k8Wp9ymvNUxy6/9lUuqa/ZNeBMB1xYwDJtdToWArf8iYFPwntkFr9eAOjKnYARsCjYNNAVnASNfi2ZrPy4iGumBT64VI5zikpEh5Yuf/vJFhHV4xleuuBmu3nXajK/uTXHVVXtnXv0Sz9XniQNcJk754YiIcF0TEPZNwfTCzSl4vQbc9ZuQtQWca8BIaDPC5M8peE3CRi7wImCjexMBI2LKmYpbKzMlrwkQaYpPbspf3k2ye5dWPcnqm+mlVZZctzsCkvV3TcAwCrPIFwHn9Avz1oD00e6XnpqG6W9PWUC7YO8XWwN6FNMUHAF1lmMFI2IEbJSSrQUDM3DJScIUklLWiptKnYqOABGitBmfvzoK7yRPlnen9NI2yQZXpJv9hsfEJ8wQD44T19Z/DEB6SBfT+tEb/bUGpNdd/yruwIEDt3myb9fk4WUEjHytAyMhECIfYLjAAt5O0zDQOYrIUdJ04ich+SMPJa/9Kb74ZHnXu99TTZdv1l19xVfPuq21f90n8Yio/z2AVuecMdoFI6B46crAF+Yc4rGC8sJ7PQXTHz3SJ73S767+LFMDjZQew+hAzwKRj2PqG3EBEAlbBzZqI2Ejeq4DI2AWgZwK4y+c8qeCU/qUEYMsb+kzrbgpN6Wv6ynPLMcvfubNP/ugPcKzv952II0fd4elusII6eAIO9bRv8bw3lk6Ehr8TckOpTokQg/qawOSBaRPet31BJzPAbOAETAr2BoQYEDg5uMY4AAuh4RrIs5pOCKulUVRkSgFp1hyOxJsl6c6Zrl1PdvlWbdj1sE/71kdxdWPCKif+uyVnUMQjrk5BeN/qXjPrr4wQz6Ec5DCz59wfjkfObOE3nc7IOxom0MgSEhH9DYt4J54Dnhg//7bnNBwCsM60AJ2bkR0zAiba4+IuMkKRkKANbKTkZAysn5rEgpT3JoAKXnGT1JIn2H+pl/+ypcvuc5XHTN9lp/3n3XW5tn++kbKK49PG3yQD29E9PmBd8swgp3p2UFUR9IuuOCC5Zf4HQ7uS0KHf33q6nS6U0ROKTmPaSk0NyDqp1f63dVT8P79+5c1oJEYAZuGexwzSdgmZFrAuRbcRMCm4xbdEXBOTVNJa2VORa+JEWE2yZk3Asy6KjPzFbednOWrc5Iugoqb/TP12hywfP0ujjN9DvvCUn7YsZJ+vMnhXX5TruNtHQVzoNXJcvdhGPxvFke2lKW3dsD0aQ1Iv7uagNYIR66/fpkK2gmvrWDrwGkJIyCAck3FTb9ZwWkBJwnnVBzpSMrIpVDKFjfDkaE4pClu5i9evpx08cLqneVm/hnPv85feLa3e4irj07AmBId5u2nRvzndwS01GGt4eTy3YyjbuLg7IBvB4BZTMew5DXlsqKOykXAdsAISK+7fw2IgGMK1gEjaU7DAMoKNv2u14FImPVrPYOAaxKureF6Kk6RZIqMLBFA/CTGzFf8Os//Nn67Oqt3klTcbPf0659Bh0wwdNLZEXuX837+mxS8lIENS2ldx+qp16B3Gt23OS5kY/WUoSu/3ePkNPzpLQI2BR/c7btgDTwVAmYFWwuuNyPTCk4CRriIWJhcT8VTcRFAXOTJYkWC4pPS105a+atzhqWvywhX55SVn+naV/xs/5x+s4LWdw7Q+tzBCWebCAdxXU5A9z/4HE41VftpE18gIpzZyX3sjBHSJ64O8PoVM/qjlz1JQCbaWqFNSNOwzqx3w03BaxLOzQgimoonCU0XTcMRkFWYSlpbwpS6nYxYpU+irP3lmQQpbp13hstDip/hTf5Z/7pv+qsO62WfI/hZE7tbeChnHXf66acvg1LdTqX7aRMk80u08DP7GMj+G2kfdvmlMvhP8tEhfe6Z54BZQM+ONN7jmLkObDPSVAyI3NoS9mA6ApJzKp4EzAJOmX8SkkJSboqf4ciRLI0s/05ynb96kqVXx6y3tAiXtROuLyQC6rs67Hr5WUTxli7upUwbOmUayJHPwGcExPPDXv52v/RGf/TYFLzr14Be1SCgkxMarRNca0FWcE1AIMw1ITLOTQmAchFwbQEpAPgpKYUJF5dyp4wEJ5PKqJOceSNVcdvlK32TnO3Jv6n9xUW+9eCDCfLBqvWzGYRFC0/+iTfcLYfEkT37o690R4/0Sa9741XcddctT817FBMBWcEIGAnnWnBOxQAzIgHWNByw0wJGxGQkJDlKy6VcJFjHlZYsjzA/qUzhTUTalK9ypQmvXW2ZeYoj64uBxI949ZfkwiQCwirywTE8DW44c5HPTEQfHP3QUwRkAenRW5Drr7tu9++CD+zf/2ZrBY8INLxpWIeahiOhjiPgJGFTcSPWlADISAjgrGAS+JSQcsgsX9ZvKpS/9OLXpIg4pSeLL7/4tb+8U5ZnytLXbSmeLI2c/ZukCwcyAoYZ/LKAYTvJB/sISC9Nv/TV9EuP9LmsAffvf/Oufg548ODB4xqq0Uw3Ak4LaHGrkzqr45OEpoFG55yGW8cEatNLwEfALMMk4CZliptE2ORfW6N1nsgx5aY8xc36ilvL6kI2/lwk1C/Eq59ZvYgHlzAKs0m+sG26jXx0EPnoZ1rA1n/0Sa/0u6sJuH///uO+idXgXCTUMR1ckzALOAnYtMES5gJ1kzVMGSmIkihskjFFplgSCWa4uMixTitcubUsfcrqKu86bYZrY7I+6M+aePoc+ZpywyjMkvCcBJzT7yRfBGQ06C0dkvRKv7uagEaIhjYFZwWZc2Y98mUF12vBSDgJyM8ZzTutCbOEZApLgZuISMmUn7KTmwhRnDzqEo5Qye4x83aPddy8V/4pZ7vry+wfP9eUGwHDKMzWBITvJF/rPvrg6GdOv/SHfPRJr7veAkbAdsFGERcBs4J1OAI2FUdAo3VNwshnlGcFkyxBLuVkDZMpcio3f8qPRIWnRCLhWWanuFk2/6y/eqasjWTtJutTfSQjXTJc4LTGblq/OfXCP11k/SYB6a5d8J4hoLVCBMyE60hrQR2s08w/EIAyHSJaB86R3OgO6NY7kXCuDSkopSVTaEqm+BQ9iRUhIo084grP9OJnXHUpty4z89UecbWp9tTmZMSrj5FuYgCXMGL5wg6O8Jz48q+tH70wEOvpNwLujTXg1VcvmxAEjHw6MMlnpHGRLzkBAtgkYVMJgAG9JiGFcBREWU1NZEokKT1XOIJFhIgxSVFaBCpc3nV86bOOdd5JttpEzvbOfsx+rQkYJvAJKwSMfGsCRr5kOkFCjr6afumRPhHw6quv3t1rwP379/+ZX6/y3CgS6ogpWKdyOjlJCIg5DQOsaXhOJ3OUR8KIN0k4FZfiKXwqdyq9PKVHnOILr+Umos08s/yse33v0sjKyzP7kX/2lwVcYzIJCDs4NqANcjjDe5Iv0qUf+oqA9Eif9Eq/u3oTcuWVVx7vv2JGQgvYScamY53V8abjScIWyqwjwCIjcJtmSADLC+AISSmUxfFLqx7hprOULswfWcjC2xGleGTJX32Fp6y+8gt33/zC2qe/2qvd674I66c0/db/iQd8Il31IF14Rr4wn8RrvRfx0hs9Wv/R65VXXrm7zwNefPHFD7zooov2X3zxxW94xStecctrXvOaf2e6I6NOeqVzwQUXvOmcc865jNu3b99fWHsAnQMWcr74xS8+dPbZZ7/4/PPPf9HBgwffANhGNyvAgl544YUXnHvuuU8455xznnjFFVfcQBlZQop93ete93fnn3/+Y5773Oc+9HnPe95PHj58+EaKRk6Su/76699y6aWXXvfa17725iuvvPKPKWnmQSRKvPzyy4+86lWvuuTiiy++8tZbb/1X9buXdGHx0uWTP2J1L/Wq333cz31rQ3m0Tzu1V7u1v/u4l/7pp/7qt/7DQVrYwAlecIMfHOEJ1zCGN9zTAX30Dh/x+JGO/uiRPul13759376rLaDGvfCFL7zTeeed98Fnn332nc8+++yHXXLJJW9+7Wtfe5yzhrjwwguveMxjHvPxj3nMY96DO/3007/7iiuu8PhmcUeOHDn+yle+ct/jHve4u5133nnvyJ155pnfcMkll9ym/FVXXXWcpX3BC17wwic96Ul3DJAzzjjja/bt2/fG8qjzJS95yaNKJ88777zv3Ldv342XXHLJsUsvvfSmiy666Ppzzz33W5/+9Ke/79Oe9rQ7P/nJT/6IV77ylX94yy23HL/55puPk7feeuvxiy666NnSn/rUp777M57xjPd8+ctf/ug3velNx3PC4qXLt2/fvme/8Y1vPP76179+qYNUr/qlu5/7ur92aI92ad9sr/brhz7rl/7pZ3n0Hw7wKA+c4BV2cIQnXMNYnXBPB/Txkpe85IpLL73UPY5ffPHF2vvms84662H0SJ/02n33jKSUl73sZV/28pe//DTu1a9+9WnPfe5zP3V24NGPfjSFnnbFFVcs7rLLLjvtOc95zifPPIB+5jOf+aXnn3/+adzZZ5992hOf+MT7zDzudeaZZ37xeeeddxonz5lnnvmhM88ZZ5xxpzPOOONzn/WsZ33eM5/5zPudfvrpn4U0M88555zz4fv37z8td+jQodNe+tKXftTM86IXvehuN9xww2nHjh07jRSe6fJfd911pynLqeuFL3zhh8887uv+2qE92qV9M4/260d90j/9nHngIE/YwGkOTHnhCdcwhjfcZz1nnXXWp15wwQWnvfjFL17c85///C9b32vmf7v/7QjsSQT+P+dL6N2VIarSAAAAAElFTkSuQmCC"></image></defs>
        </svg>
        </h6>
            </button> 
            <div data-v-fde0cb54="" class="v-expansion-panel-content" style="">
                <div class="v-expansion-panel-content__wrap">
                    <div class="row">
                        <div class="col-6">
                <p class="mt-4 mb-1">You Get</p> 
                </div>
                <div class="col-6">
                <p class="mt-4 mb-1 text-right">₦<strong class="amt2">0</strong></p> 
                </div>
                </div>
                <div class="dividerr"></div>
                
                 <div class="row">
                        <div class="col-6">
                <p class="mt-4 mb-1">Discount</p> 
                </div>
                <div class="col-6">
                <p class="mt-4 mb-1 text-right">₦<strong id="dis2">0</strong></p> 
                </div>
                </div>
                <div class="dividerr"></div>
                
                 <div class="row">
                        <div class="col-6">
                <p class="mt-4 mb-1">You Pay</p> 
                </div>
                <div class="col-6">
                <p class="mt-4 mb-1 text-right">₦<strong id="tot">0</strong></p>
                </div>
                </div>
                
                <div class="dividerr"></div>
                
                </div></div></div> </div> </div>
                
                 <div class="text-center">
                            <button type="submit"  class=" submit btn btn-neutral submit-btn" >{{__('Buy Airtime')}} <!--<span id="resulttransfer"></span>--></button>
                        </div> 
                    
                
                
                
                </div> </div>
            
      </div>
      
      
      
    </div></form></div></div>
    
    
              
    
    
    
    
<div class="content-wrapper card-body">
    <div class="card">
      <div class="card-header header-elements-inline">
        <h3 class="mb-0 font-weight-bolder">{{__('Transactions')}}</h3>
      </div>
      


      <div class="modal fade" id="single-charge" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card bg-white border-0 mb-0">
                  <div class="card-header">
                    <h3 class="mb-0 font-weight-bolder">{{__('Airtime')}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   
                  </div>
                  <div class="card-body">
              
              
              
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>     
        
        
        
        
        
<div data-v-be36719e="" class="v-data-table theme--light">
            <div class="v-data-table__wrapper">
      <div class="table-responsive">
      <table class="table table-flush" id="datatable-buttons">
										 <thead class="v-data-table-header">
													 <tr>
                                <th role="columnheader" scope="col" aria-label="" class="text-start"><span></span></th>
                                
                                <th role="columnheader" scope="col" aria-label="Transaction ID" class="text-start"><span>Trx</span></th>
                                
                                <th role="columnheader" scope="col" aria-label="Type: Not sorted. Activate to sort ascending." aria-sort="none" class="text-start sortable"><span>Network</span><i aria-hidden="true" class="v-icon notranslate v-data-table-header__icon mdi mdi-arrow-up theme--light" style="font-size: 18px;"></i></th>
                                
                                 <th role="columnheader" scope="col" aria-label="Type: Not sorted. Activate to sort ascending." aria-sort="none" class="text-start sortable"><span>Phone</span><i aria-hidden="true" class="v-icon notranslate v-data-table-header__icon mdi mdi-arrow-up theme--light" style="font-size: 18px;"></i></th>
                                
                                <th role="columnheader" scope="col" aria-label="Status: Not sorted. Activate to sort ascending." aria-sort="none" class="text-start sortable"><span>Amount</span><i aria-hidden="true" class="v-icon notranslate v-data-table-header__icon mdi mdi-arrow-up theme--light" style="font-size: 18px;"></i></th>
                                
                                <th role="columnheader" scope="col" aria-label="Amount: Not sorted. Activate to sort ascending." aria-sort="none" class="text-start no-wrap sortable"><span>Status</span><i aria-hidden="true" class="v-icon notranslate v-data-table-header__icon mdi mdi-arrow-up theme--light" style="font-size: 18px;"></i></th>
                                
                                <th role="columnheader" scope="col" aria-label="Date: Not sorted. Activate to sort ascending." aria-sort="none" class="text-start sortable"><span>Date</span><i aria-hidden="true" class="v-icon notranslate v-data-table-header__icon mdi mdi-arrow-up theme--light" style="font-size: 18px;"></i></th>
                                
                                </tr>
												</thead>
												<tbody>
												@foreach($bills as $data)
													<td class="text-start"><a data-toggle="modal" data-target="#modal-form{{$data->id}}" href=""><i class="fad fa-eye" style="font-size:20px;"></i></a></td>
        
        <td class="text-start font-weight-bold"><a data-toggle="modal" data-target="#modal-form{{$data->id}}" href="">{{$data->trx}}</a></td>
        
        <td class="text-start  no-wrap">{{strtoupper($data->network)}}</td>
        
        <td class="text-start  no-wrap">{{$data->phone}}</td>
        
        <td class="text-start  no-wrap">₦{{number_format($data->amount,2)}}</td>
        

                                                       @if($data->status == 0)
														<td><span class="badge bg-warning badge-pill">Pending</span></td>
														@elseif($data->status == 1)
														<td><span class="badge bg-success badge-pill">Completed</span></td>
														@else
														<td><span class="badge bg-danger badge-pill">Declined</span></td>
														@endif
														
					<td class="text-start  no-wrap">{{date('d M, Y', strtotime($data->created_at))}}</td>									
													</tr>
			<div class="modal fade" id="modal-form{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                        <h3 class="mb-0">  
                          
                             #{{$data->trx}} {{__('Airtime Purchase')}}
								
							</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>										
													
					<div class="modal-body">
                           <div data-v-234a7da3="" class="overview pa-6">
                           <div data-v-234a7da3="" class="pa-0 col">
                            
                            
                            
                           
								
		
            <div data-v-234a7da3="" class="row align-center">
            <div data-v-234a7da3="" class="col-4"><p data-v-234a7da3="" class="overview__subtitle">Date</p></div>
            <div data-v-234a7da3="" class=" col-8 " style="text-align: right;"><p data-v-234a7da3="" class="overview__value">{{date(' d M, Y ', strtotime($data->created_at))}} {{date('h:i A', strtotime($data->created_at))}}</p></div></div> 
            
            <div data-v-234a7da3="" class="overview__divider"></div>
            <div data-v-234a7da3="" class="row mt-4 align-center">
            <div data-v-234a7da3="" class=" col-4 "><p data-v-234a7da3="" class="overview__subtitle">Phone</p></div>
            <div data-v-234a7da3="" class=" col-8 " style="text-align: right;"><p data-v-234a7da3="" class="overview__value">{{$data->phone}}</p></div></div>
            
            <div data-v-234a7da3="" class="overview__divider"></div>
            <div data-v-234a7da3="" class="row align-center">
            <div data-v-234a7da3="" class="col-4"><p data-v-234a7da3="" class="overview__subtitle">Network</p></div>
            <div data-v-234a7da3="" class=" col-8 " style="text-align: right;"><p data-v-234a7da3="" class="overview__value">{{strtoupper($data->network)}}</p></div></div> 
            
            <div data-v-234a7da3="" class="overview__divider"></div>
            <div data-v-234a7da3="" class="row align-center">
            <div data-v-234a7da3="" class="col-4"><p data-v-234a7da3="" class="overview__subtitle">Amount</p></div>
            <div data-v-234a7da3="" class=" col-8 " style="text-align: right;"><p data-v-234a7da3="" class="overview__value">₦{{number_format($data->amount),2}}</p></div></div> 
            
            <div data-v-234a7da3="" class="overview__divider"></div>
            <div data-v-234a7da3="" class="row align-center">
            <div data-v-234a7da3="" class="col-4"><p data-v-234a7da3="" class="overview__subtitle">Charge</p></div>
            <div data-v-234a7da3="" class=" col-8 " style="text-align: right;"><p data-v-234a7da3="" class="overview__value">₦{{number_format($data->charge),2}}</p></div></div> 
            
            
            <div data-v-234a7da3="" class="overview__divider"></div>
            <div data-v-234a7da3="" class="row align-center">
            <div data-v-234a7da3="" class="col-4" ><p data-v-234a7da3="" class="overview__subtitle">Status</p></div>
            <div data-v-234a7da3="" class=" col-8 "style="text-align: right;"><p data-v-234a7da3="" class="overview__value"> @if($data->status == 0)
													 <span class="badge badge-pill badge-warning"><i class="fad fa-spinner"></i> {{__('Pending')}}</span>
														@elseif($data->status == 1)
													<span class="badge badge-pill badge-success"><i class="fad fa-check"></i> {{__('Successful')}}</span>
														@else
													 <span class="badge badge-pill badge-danger"><i class="fad fa-ban"></i> {{__('Declined')}}</span>
														@endif</p></div></div> 
            
           
           
           <!----></div></div></div></div>
                           
                          </div>
                        </div>								
														
													
											  @endforeach


												</tbody>
											</table>
											</div>
									</div>
										</div>
									</div>
    </div>
    
@push('script')

 <script type="text/javascript">


        
        var startTimer;
        $('#email').on('keyup', function () {
            clearTimeout(startTimer);
            let $checkDiv = $('#email2');
            $checkDiv.attr({'class':'input-group-text checking'});
            $checkDiv.text('checking...');
            let email = $(this).val();
            startTimer = setTimeout(checkEmail, 300, email);
            
        });

        $('#email').on('keydown', function () {
            clearTimeout(startTimer);
        });
        
        function checkEmail(email) {
            $('#email-error').remove();
            
            if (email.length > 1) {
                $.ajax({
                    type: 'post',
                    url: "{{ route('user.checkEmail') }}",
                    data: {
                        email: email,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        let $checkDiv2 = $('#email2');
                        let $tt = $(".amt").val();
                        let $cal = {{$discount->discount}}/100*$tt;
                        if (data.success == false) {
                            $checkDiv2.attr({'class':'input-group-text text-danger'});
                            $checkDiv2.text(''+data.message+'');
                            $('#dis').val(0);
                            $('#dis2').text(0);
                            $('#tot').text($tt);
                        } else {
                            $checkDiv2.attr({'class':'input-group-text text-success'});
                            $checkDiv2.text(''+data.message+'');
                            $('#dis').val($tt-$cal);
                            $('#dis2').text($cal);
                            $('#tot').text($tt-$cal);
                        }

                    }
                });
            } 
            else {
                $('#email2').attr({'class':'input-group-text'});
                $('#email2').text('Discount Code');
                $('#dis').val(0);
                $('#dis2').text(0);
                $('#tot').text($(".amt").val());
            }
        }
  
</script>
<script>
$(function() {
  $('.amt').on("input", function() {
    $('.amt2').text($(this).val());
    $('#tot').text($(this).val());
    $('#dis2').text(0);
    $('#email').val('');
    $('#dis').val(0);
    $('#email2').text('Discount Code');
    $('#email2').attr({'class':'input-group-text'});
    $(".submit").removeAttr('disabled');
    
    if($(this).val().length)
    $('#yeah').show();
  else
    $('#yeah').hide();
    
  });
});

  
$(document).ready(function(){
    $("#myselection").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();

});

  $('#em').on("input", function() {
    $('#v1').val($(this).val());
  });
  
  
$('input[name=saveben]').change(function(){
  if(this.checked){
    $('.yeah2').show();
  }
  else{
    $('.yeah2').hide();
  }
});



</script>
@endpush


@endsection
  