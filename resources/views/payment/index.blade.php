@extends('layouts.master')
@section('content')
    <div class="row">
            <div class="col-md-12">
                 <form action="{{ route('payment.store') }}" method="POST">
              @csrf
              <div class="card">
                <div class="card-header">
                  <h4>Jenis Pembayaran</h4>
                </div>
                   <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" name="name" class="form-control" placeholder="Input Jenis Pembayaran">
                        </div>
                        <div class="form-group col-md-4">
                             <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>Jenis Pembayaran</th>
                        <th>Action</th>
                      </tr>
                      @foreach ($payments as $payment)
                        <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $payment->name }}</td>
                          <td>
                            <form action="{{ route('payment.destroy',$payment->id) }}" method="POST">
                            <a href="{{ route('payment.edit', $payment->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {!! $payments->links() !!}
@endsection
