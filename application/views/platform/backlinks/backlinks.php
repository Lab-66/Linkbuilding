<div class="content-container platform" id="container-backlinks-pendinglist">
    <div class="container-header">
        <div class="container-title">
            To pay
        </div>
    </div>
    <div class="container-content">
        <div class="pendingmanage">
            <div class="pendingfield">
                <div class="pendingfield-header">
                </div>
                <div class="pendingfield-content">
                    <table class="table-table pendingtable" cellpadding="0" cellspacing="0" id="pendingtable">
                        <tr>
                            <th class="tbtn" fname="id"><div class="table-data" id="theader-id">ID<i class="fas fa-sort-down"></i></div></th>
                            <th class="tbtn" fname="link"><div class="table-data" id="theader-link">Link<i class="fas fa-sort-down"></i></div></th>
                            <th class="tbtn" fname="anchortag"><div class="table-data" id="theader-anchortag">Anchortag<i class="fas fa-sort-down"></i></div></th>
                            <th class="tbtn" fname="sister"><div class="table-data" id="theader-sister">Sister<i class="fas fa-sort-down"></i></div></th>
                        </tr>
                    </table>
                    <script>
                    $(window).ready(function(e)
                    {
                        getPendingLinksBy();
                    });

                    function getPendingLinksBy() {

                        $.ajax(
                            {
                                type:"post",
                                url: "<?= base_url(); ?>request/apl",
                                data:{
                                    filterType: $("#pendingtable").attr("tfilter"),
                                    userId: 1
                                },
                                datatype: "json",
                                success:function(response)
                                {
                                    filterPendingLinks(response);
                                },
                                error: function(xhr,status,error)
                                {
                                    console.log(xhr+"///"+status+"///"+error)
                                }
                            }
                        );
                    }

                    var fs = {
                        id: {
                            pos: "id.0-9",
                            neg: "id.9-0"
                        },
                        link: {
                            pos: "link.a-z",
                            neg: "link.z-a"
                        },
                        anchortag: {
                            pos: "anchortag.a-z",
                            neg: "anchortag.z-a"
                        },
                        sister: {
                            pos: "sister.0-9",
                            neg: "sister.9-0"
                        }
                    };

                    $(".tbtn").click(function() {
                        b = $(this);
                        bi = b.find("i");
                        if(bi.hasClass("fa-sort-down")) {
                            bi.toggleClass("fa-sort-down fa-sort-up");
                            bi.closest(".table-table").attr("tfilter", fs[b.attr("fname")]["neg"]);
                            getPendingLinksBy();
                        }
                        else {
                            bi.toggleClass("fa-sort-up fa-sort-down");
                            bi.closest(".table-table").attr("tfilter", fs[b.attr("fname")]["pos"]);
                            getPendingLinksBy();
                        }

                    });
                </script>
                </div>
            </div>
        </div>
    </div>
</div>
