<?php $this->load->view('nav_header', $username); ?>


<section class="question-area pt-10px pb-10px">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-1">
                <label> &nbsp;&nbsp;&nbsp;&nbsp; Ask me : </label>
            </div>
            <div class="col-lg-4">
                <input class="form-control mr-sm-2 custom-input" id="search" type="search" aria-label="Search">
            </div>
            <div class="col-lg-5">
                <button class="btn btn-outline-primary custom-button my-2 my-sm-0" type="submit">Search</button>
                <button class="btn btn-outline-primary custom-button my-2 my-sm-0" type="reset">Clear</button>
                <button class="btn btn-outline-primary custom-button my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#questionModal">Add Question</button>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <br>
                <?php if ($this->session->flashdata('Success')) : ?>
                    <div class="alert success" id="successAlert">
                        <span class="closebtn">&times;</span>Successfully added a question !
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-2">
            </div>
        </div>



        <br>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="question-tabs mb-50px">
                    <div class="tab-content pt-20px" id="myTabContent">
                        <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    <?php foreach ($questions as $question) : ?>
                                        <?php
                                        $createdDateTime = new DateTime($question->created_date);
                                        $currentDateTime = new DateTime();
                                        $timeDiff = $createdDateTime->diff($currentDateTime);
                                        $timeDiffStr = $timeDiff->format('%h hours ago');
                                        ?>
                                        <div class="media media-card media--card align-items-center" style="border: 2px solid #892deb;">
                                            <div class="votes text-center votes-2">
                                                <div class="answer-block my-2">
                                                    <span class="answer-counts d-block lh-20 fw-medium"><?php echo $question->answer_count; ?></span>
                                                    <span class="answer-text d-block fs-14 lh-18">answers</span>
                                                </div>
                                                <div class="view-block">
                                                    <span class="view-counts d-block lh-20 fw-medium"><?php echo $question->view_count; ?></span>
                                                    <span class="view-text d-block fs-13 lh-18">views</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="<?php echo base_url('question_answers?question_id=' . $question->question_id); ?>"><u><?php echo $question->question; ?></u></a></h5><br>
                                                <small class="meta">
                                                    <span class="pe-1"><?php echo $timeDiffStr; ?></span>
                                                    <a href="" class="author"><?php echo $question->created_user; ?></a>
                                                </small>
                                                <div class="tags">
                                                    <?php
                                                    $tags = explode(',', $question->tags);
                                                    foreach ($tags as $tag) {
                                                        $tag = trim($tag);
                                                        echo '<a href="#" class="tag-link" style="background-color: #d4c3e6;">#' . $tag . '</a> ';
                                                    }
                                                    ?>
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#addTagModal" class="tag-link" style="background-color: #d4c3e6;" data-question_id="<?php echo $question->question_id; ?>">Add tag....</a>

                                                    <span class="created-date"><?php echo $question->created_date; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>
</section>














<div class="modal fade modal-container login-form" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #dedede;">
            <div class="modal-header align-items-center">
                <h3 class="modal-title" id="loginModalTitle">Question</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('add_question'); ?>" method="post">
                    <div class="form-group">
                        <textarea name="question" id="question" rows="7" class="form-control" style="background-color: #cbd3f5;" placeholder="Type your question....." required></textarea>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2"></label>
                        <label class="col-lg-3 col-form-label text-lg-right"> &nbsp;&nbsp;&nbsp; Add Tags :</label>
                        <div class="col-lg-5">
                            <input class="form-control custom-input" name="add_tages" id="add_tages" type="text" required>
                        </div>
                        <label class="col-lg-2"></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn theme-btn w-30">Submit<i class="la la-arrow-right icon ms-1"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>







<div class="modal fade modal-container login-form" id="addTagModal" tabindex="-1" role="dialog" aria-labelledby="addTagModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #dedede;">
            <div class="modal-header align-items-center">
                <h3 class="modal-title" id="addTagModal">Add New Tag</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('add_new_tag'); ?>" method="post">
                    <div class="form-group row">
                        <label class="col-lg-2"></label>
                        <label class="col-lg-3 col-form-label text-lg-right"> &nbsp;&nbsp;&nbsp; Add Tag :</label>
                        <div class="col-lg-5">
                            <input class="form-control custom-input" name="add_tages" id="add_tages" type="text" required>
                            <input class="form-control custom-input" name="question_id" id="question_id_new" type="text" hidden>
                        </div>
                        <label class="col-lg-2"></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn theme-btn w-30">Update<i class="la la-arrow-right icon ms-1"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<br><br><br><br><br><br><br>
<?php $this->load->view('nav_footer'); ?>
</body>

</html>



<script>
    var close = document.getElementsByClassName("closebtn");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function() {
                div.style.display = "none";
            }, 5);
        }
    }



    var close = document.getElementsByClassName("closebtn");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function() {
                div.style.display = "none";
            }, 300);
        }
    }



    setTimeout(function() {
        var successAlert = document.getElementById("successAlert");
        successAlert.style.opacity = "0";
        setTimeout(function() {
            successAlert.style.display = "none";
        }, 300);
    }, 5000);



    $(document).ready(function() {
        $('#addTagModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var question_id = button.data('question_id');
            $('#question_id_new').val(question_id);
        });
    });
</script>