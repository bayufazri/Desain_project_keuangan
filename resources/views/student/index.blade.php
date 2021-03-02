@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="container"></div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Peserta Didik</h4>
                </div>
                <div class="col-md-4" style="padding-left: 25px">
                 <a href="#" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data</a>
                </div>
                  <div class="table-responsive table-invoice" style="padding-top: 10px">
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Rayon</th>
                        <th>Rombel</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <a href="#" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection