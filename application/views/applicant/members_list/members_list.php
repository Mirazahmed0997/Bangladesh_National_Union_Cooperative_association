<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">

            <form method="get" action="<?= base_url('Applicant/members_list') ?>">
                <!-- Row 1 -->
                <div class="row g-2 mb-2 align-items-center">

                    <div class="col-md-auto">
                        <button type="button" class="btn btn-primary">সদস্য খুজুন</button>
                    </div>

                    <div class="col-md">
                        <input type="text" name="id" value="<?= $this->input->get('id') ?>"
                            class="form-control" placeholder="সদস্য নম্বর">
                    </div>

                    <div class="col-md">
                        <input type="text" name="branch_registration_no" class="form-control"
                            placeholder="সমিতির নিবন্ধন নম্বর">
                    </div>

                    <div class="col-md">
                        <input type="text" name="mobile_number" class="form-control" placeholder="মোবাইল নম্বর">
                    </div>

                    <div class="col-md">
                        <select name="branch_name" class="form-select">
                            <option value="">সদস্য সমিতির নাম</option>

                            <?php foreach ($members as $member): ?>
                                <option value="<?= $member->Cooperative_association_name ?>"
                                    <?= $this->input->get('Cooperative_association_name') == $member->Cooperative_association_name ? 'selected' : '' ?>>
                                    <?= $member->Cooperative_association_name ?>
                                </option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                </div>

                <!-- Row 2 -->
                <div class="row g-2 align-items-center">

                    <div class="col-md-auto">
                        <button type="button" class="btn btn-primary">তারিখ নির্বাচন</button>
                    </div>

                    <div class="col-md">
                        <input type="date" name="from_date" class="form-control">
                    </div>

                    <div class="col-md">
                        <input type="date" name="to_date" class="form-control">
                    </div>

                    <div class="col-md-auto">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0 text-center">সদস্য তালিকা</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="membersTable"
                            class="table table-bordered table-striped table-hover dt-responsive nowrap"
                            style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ক্রমিক</th>
                                    <th>সদস্য নম্বর</th>
                                    <th>সমিতির নাম</th>
                                    <th>নিবন্ধন ঠিকানা</th>
                                    <th>নিবন্ধন নম্বর</th>
                                    <th>মোবাইল</th>
                                    <th>ভর্তির তারিখ</th>


                                    <th>অনুমোদনকারী</th>
                                    <th>প্রত্যাহার তারিখ</th>
                                    <th>প্রত্যাহার অনুমোদনকারী</th>
                                    <th>অবস্থান</th>


                                    <th>খতিয়ান</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($members as $row) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $row->id; ?></td>
                                        <td><?= $row->Cooperative_association_name; ?></td>
                                        <td><?= $row->Cooperative_association_address; ?></td>
                                        <td><?= $row->Cooperative_association_registration_no; ?></td>
                                        <td><?= $row->Cooperative_association_number; ?></td>
                                        <td><?= $row->created_at; ?></td>


                                        <td><?= $row->approved_by; ?></td>
                                        <td><?= $row->widthdrawal_date; ?></td>
                                        <td><?= $row->widthdrawal_approved_by; ?></td>
                                        <td><?= $row->is_active; ?></td>
                                        <td></td>



                                        <td><a href="<?= base_url('Applicant/view_member/' . $row->id); ?>"
                                                class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                                        <td>

                                            <a href="<?= base_url('Applicant/form_view/' . $row->id); ?>"
                                                class="btn btn-warning btn-sm">Preview</a>
                                            <a href="<?= base_url('Applicant/edit_member/' . $row->id); ?>"
                                                class="btn btn-warning btn-sm">Update</a>
                                            <a href="<?= base_url('Applicant/delete_member/' . $row->id); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<!-- DataTables Scripts -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.3.2/js/dataTables.fixedHeader.min.js"></script>

<script>
    $(document).ready(function () {
        $('#membersTable').DataTable({
            responsive: true,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            pageLength: 10,
            fixedHeader: true,
            lengthMenu: [10, 25, 50, 100],
            language: {
                search: "Search:",
                lengthMenu: "Show _MENU_ entries",
                info: "Showing _START_ to _END_ of _TOTAL_ members"
            }
        });
    });
</script>