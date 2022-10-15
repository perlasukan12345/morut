<div class="row">
    <div class="col-12">
        <ul class="list-pemerintahan">
            <?php foreach ($detail_opd as $op) : ?>
                <li>
                    <a href="#" target="_blank">
                        <div class="row">
                            <div class="col-lg-1 col-2 text-center">
                                <span data-eva="arrow-right-outline"></span>
                            </div>
                            <div class="col-lg-9 col-10">
                                <?= $op->opd ?>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>