<div>
 <div class="container">
      <div class="col-md-12" style="margin-top:100px">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">
                Contacts Table
              <a href="{{route('contact-us')}}" class="btn btn-primary float-right mb-10">Back</a>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $contact)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ !empty($contact->first_name) ? $contact->first_name : '-' }}</td>
                        <td>{{ !empty($contact->last_name) ? $contact->last_name : '-' }}</td>
                        <td>{{ !empty($contact->email) ? $contact->email : '-' }}</td>
                        <td>{{ !empty($contact->message) ? $contact->message : '-' }}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
  </div>
</div>
