@extends('layouts.grid.table')

@section('table_header')
   
                            <thead>
                              <tr>
                                 <th>campaign</th>
                                 <th>account details</th>
                                 <th>category</th>
                                 <th>amount</th>
                                 <th>status</th>
                                 <th>action</th>
                              </tr>
                           </thead>
@endsection

@section('table_body')
  
      <tbody>
                              <tr>
                                 <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="../../../app-assets/images/cards/1.png"
                                    alt="card">Headphones
                                    Beats
                                 </td>
                                 <td>Account number 4154 81** **** 7617</td>
                                 <td class="text-bold-600"><i class="text-bold-600 bx bx-music mr-50"></i><span>Music</span>
                                 </td>
                                 <td class="text-bold-600">$1,934</td>
                                 <td class="text-success">Success!</td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash mr-1"></i> delete</a>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="../../../app-assets/images/cards/2.png"
                                    alt="card">Nike Lab</td>
                                 <td>Account number 4154 81** **** 7617</td>
                                 <td class="text-bold-600"><i class="text-bold-600 bx bx-tennis-ball mr-50"></i><span>Sports</span></td>
                                 <td class="text-bold-600">$232</td>
                                 <td class="text-danger">Failed!</td>
                                 <td>
                                    <div class="dropup">
                                       <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash mr-1"></i> delete</a>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="../../../app-assets/images/cards/3.png"
                                    alt="card">Pepsi
                                    Drink
                                 </td>
                                 <td>Account number 4154 81** **** 7617</td>
                                 <td class="text-bold-600"><i class="text-bold-600 bx bx-truck mr-50"></i><span>Transportation</span>
                                 </td>
                                 <td class="text-bold-600">$564</td>
                                 <td class="text-success">Success!</td>
                                 <td>
                                    <div class="dropup">
                                       <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash mr-1"></i> delete</a>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="../../../app-assets/images/cards/4.png"
                                    alt="card">Headphones
                                    Beats
                                 </td>
                                 <td>Account number 4154 81** **** 7617</td>
                                 <td class="text-bold-600"><i class="text-bold-600 bx bx-music mr-50"></i><span>Music</span>
                                 </td>
                                 <td class="text-bold-600">$232</td>
                                 <td class="text-warning">Pending!</td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash mr-1"></i> delete</a>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="../../../app-assets/images/cards/5.png"
                                    alt="card">Headphones
                                    Beats
                                 </td>
                                 <td>Account number 4154 81** **** 7617</td>
                                 <td class="text-bold-600"><i class="text-bold-600 bx bx-truck mr-50"></i><span>Transportation</span>
                                 </td>
                                 <td class="text-bold-600">$564</td>
                                 <td class="text-success">Success!</td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash mr-1"></i> delete</a>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="../../../app-assets/images/cards/2.png"
                                    alt="card">Headphones
                                    Beats
                                 </td>
                                 <td>Account number 4154 81** **** 7617</td>
                                 <td class="text-bold-600"><i class="text-bold-600 bx bx-truck mr-50"></i><span>Transportation</span>
                                 </td>
                                 <td class="text-bold-600">$894</td>
                                 <td class="text-warning">Pending!</td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash mr-1"></i> delete</a>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
 



@endsection

