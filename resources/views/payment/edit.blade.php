@extends('layouts.master')
@section('content')
    <div class="row">
            <div class="col-md-12">
                 <form action="{{ route('payment.update', $payment->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card">
                <div class="card-header">
                  <h4>Jenis Pembayaran</h4>
                </div>
                   <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" name="name" value="{{ $payment->name }}" class="form-control" placeholder="Input Jenis Pembayaran">
                        </div>
                        <div class="form-group col-md-4">
                             <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
          
@endsection
