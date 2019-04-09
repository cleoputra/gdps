<?php echo View::make('includes/adminHeader'); ?>
<div class="content-wrapper" id="dashboard">
  <section class="content">
         <!-- /.row -->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>E-Recruitment Program Table </b></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>NAMA PEGAWAI</th>
                    <th>TANGGAL PENDAFTARAN</th>
                  </tr>
                  @foreach ($formRecruit as $f_recruit)
                      <tr>
                        <td>{{ $f_recruit->id }}</td>
                        <td>{{ $f_recruit->nik }}</td>
                        <td>{{ $f_recruit->name }}</td>
                        <td>{{ $f_recruit->created_at }}  </td>

                        <td>
                          <form method="get" action="{{ route('admin.detail', ['formRecruit' => $f_recruit->id]) }}">
                            <button type="submit" class="btn btn-success btn-sm">Detail</button>
                          </form>
                        </td>
                        
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger" @click="changeId({{ $f_recruit->id }})">Delete</button>
                        </td>
                   
                      </tr>
                    @endforeach
                    </table>

                      {{-- Modal Delete --}}
                      <div class="modal modal-danger fade" id="modal-danger">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Delete Data</h4>
                            </div>
                            <div class="modal-body">
                            <p>This will be erased the #@{{ id }} data. Are you sure to proceed?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                              <form method="post" :action="urlToDelete">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                      
              </div>
              <!-- /.box-body -->
            </div>
          
          </div>
        </div>
    </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script>
  var app = new Vue({
    el: '#dashboard',
    data: {
      id: 0,
    },
    computed: {
      urlToDelete() {
        return '{{ url('') }}/delete/' + this.id  
      },
    },
    methods: {
      changeId(id) {
        this.id = id
      },
    },
  })
</script>

<?php echo View::make('includes/adminFooter'); ?>
