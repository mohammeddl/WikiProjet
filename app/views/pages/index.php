<?php require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/navbar.php';
?>


<h4 class="px-24 py-6 w-[40%] text-3xl my-6 font-semibold leading-snug">Welcome To Wiki</h4>
<?php require APPROOT . '/views/inc/filter.php'; ?>

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        <?php foreach ($data as $wiki) { ?>
            <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
                <img src="<?= URLROOT ?>/img/<?= $wiki->imgWiki ?>" alt="img" />
                <div class="p-5 border border-t-0">
                    <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                        <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">traveling</a>
                        <span class="text-gray-600">— <?= $wiki->wikiDate ?></span>
                    </p>
                    <a href="/" aria-label="Category" title="Visit the East" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Visit the East</a>
                    <p class="mb-2 text-gray-700">
                        <?= $wiki->content ?>
                    </p>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script>
    $("#default-search").keyup(function() {
        var input = $(this).val();

        if (input != "") {
            // alert(input);
            const fetchUrl = "<?php echo URLROOT . '/wikis/search_wiki'; ?>";
            $.ajax({
                url: fetchUrl,
                method: "POST",
                data: {

                    input: input
                },
                // dataType: 'json',
                success: function(tasks) {
                    console.log(tasks);
                    $("#search_result").html(tasks);


                },
                error: function(xhr, status, error) {
                    console.error('Error fetching tasks:', status, error);
                }
            });
            $("#wikis").hide();
            $("#search_result").show()

        } else {
            $("#wikis").show();
            $("#search_result").hide()

        }

    })
</script>


<?php
require APPROOT . '/views/inc/trusted.php';
require APPROOT . '/views/inc/linkFooter.php';
require APPROOT . '/views/inc/footer.php';
