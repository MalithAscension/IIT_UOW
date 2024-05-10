<?php $this->load->view('nav_header'); ?>



<section class="question-area pt-10px pb-10px">
    <div class="container">
        <br>

     
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
            <h3 class="fs-22 pb-2 fw-bold" style="text-align: center;">MY ALL QUESTIONS</h3>
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
                                        <div class="media media-card media--card align-items-center" style="background-color: #f0f0f0;">
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


<?php $this->load->view('nav_sub_footer'); ?>
<?php $this->load->view('nav_footer'); ?>
</body>
</html>

