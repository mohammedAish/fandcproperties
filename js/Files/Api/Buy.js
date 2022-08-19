







    // // Fakes the loading setting a timeout
    // setTimeout(function() {
    //     $('body').addClass('loaded');
    // }, 5000);


    // Get the modal





        var projectData =[];
        var projectIndex =[];
        var start =0
        var end =10

        let pageSize = 10;
        let currentPage = 1;
        var place = 1;



        async function getResourceHere() {
            const _apiBase = "https://api.fcproperties.co/listings/feed/propertyfinder"
            const res = await fetch(`${_apiBase}`)

            const body = await res.json()
            projectData = body;
            start = (currentPage - 1) * pageSize
            end = currentPage * pageSize

        }
        async function renderProjects(page =1,first,last){

            await getResourceHere()
            if (page == numPages()) {
                nextButton.style.visibility = "hidden";
            } else {
                nextButton.style.visibility = "visible";
            }
            projectData.filter((row,index) =>{
                start = first
                end = last

                if (index >= start && index < end) return true ;

            }).forEach(char => {

                console.log(projectData)
                const propertyContent = document.querySelector(".u-layout");
                if(place == 1) {
                    const propertyItem = document.createElement("div");
                    propertyItem.className = "u-layout-row";
                    propertyItem.innerHTML = `
                 <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1" data-href="https://nicepage.com">
                            <div class="u-container-layout u-container-layout-1">
                                <div class="u-expanded-width-sm u-expanded-width-xs u-radius-10 u-shape u-shape-round u-white u-shape-1"></div>
                                <div class="u-border-1 u-border-grey-10 u-expanded-width-xs u-line u-line-horizontal u-line-1"></div>
                                <img class="u-bottom-left-radius-8 u-expanded-width-sm u-expanded-width-xs u-image u-image-round u-top-left-radius-8 u-image-1" src="https://www.colliers.com/-/media/images/colliers/asia/regional-image-library/1536x1040-hero-researchnews/generic1536x1040pxkl.ashx?bid=0a1129f133ff4180be8f1e1ccb78c8f5" alt="" data-image-width="1536" data-image-height="1040">
                                <div class="u-bottom-right-radius-10 u-container-style u-expanded-width-sm u-expanded-width-xs u-grey-10 u-group u-shape-round u-group-1">
                                    <div class="u-container-layout u-container-layout-2"><span class="u-file-icon u-icon u-icon-circle u-text-palette-2-base u-white u-icon-1"><img src="images/17.png" alt=""></span><span class="u-file-icon u-icon u-icon-circle u-text-custom-color-2 u-white u-icon-2"><img src="images/18.png" alt=""></span><span class="u-file-icon u-icon u-icon-circle u-text-palette-2-base u-white u-icon-3"><img src="images/19.png" alt=""></span>
                                        <a href="https://nicepage.com/k/card-html-templates" class="u-border-2 u-border-hover-white u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-34 u-text-hover-white u-white u-btn-1"><span class="u-file-icon u-icon u-text-palette-2-base"><img src="images/20.png" alt=""></span>&nbsp;Follow
                                        </a>
                                    </div>
                                </div>
                                <h2 class="u-text u-text-default u-text-1">Price AED 760​,000</h2>
                                <h6 class="u-text u-text-default u-text-2">Brand New | Modren Layout | Bright and Roomy</h6><span class="u-file-icon u-icon u-text-grey-40 u-icon-5"><img src="images/21.png" alt=""></span>
                                <h6 class="u-text u-text-default u-text-3">International City , Lawnz Residence</h6>
                                <h6 class="u-text u-text-grey-40 u-text-4">International City , Lawnz Residence</h6><span class="u-file-icon u-icon u-icon-6"><img src="images/684908.png" alt=""></span>
                                <div class="u-black u-bottom-left-radius-20 u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-opacity u-opacity-35 u-shape-round u-group-2">
                                    <div class="u-container-layout u-container-layout-3">
                                        <h5 class="u-text u-text-body-alt-color u-text-default u-text-5">Name Here</h5>
                                    </div>
                                </div><span class="u-file-icon u-icon u-text-grey-40 u-icon-7"><img src="images/23.png" alt=""></span><span class="u-file-icon u-icon u-text-grey-40 u-icon-8"><img src="images/24.png" alt=""></span><span class="u-file-icon u-icon u-text-grey-40 u-icon-9"><img src="images/25.png" alt=""></span>
                                <h6 class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-default u-text-grey-40 u-text-6">2 Beds&nbsp;</h6>
                                <h6 class="u-text u-text-default u-text-grey-40 u-text-7">2 Beds&nbsp;</h6>
                                <h6 class="u-text u-text-default u-text-grey-40 u-text-8">2 Beds&nbsp;</h6>
                                <h6 class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-default-xl u-text-grey-40 u-text-9">1</h6><span class="u-border-1 u-border-grey-25 u-file-icon u-grey-10 u-icon u-icon-rounded u-radius-5 u-icon-10"><img src="images/786251.png" alt=""></span><span class="u-border-1 u-border-grey-25 u-file-icon u-grey-10 u-icon u-icon-rounded u-radius-5 u-text-custom-color-1 u-icon-11"><img src="images/27.png" alt=""></span>
                                <img class="u-border-2 u-border-white u-image u-image-round u-radius-3 u-image-2" src="https://wp-tid.zillowstatic.com/8/real-estate-agent-broker-7f9bb8.png" alt="" data-image-width="1600" data-image-height="1067">
                            </div>
                        </div>`;

                    propertyContent.appendChild(propertyItem);
                    place+=1;
                }else if (place == 2) {
                    const propertyItem = document.createElement("div");
                    propertyItem.className = "cell-temp-clone u-container-style u-layout-cell u-size-30 u-layout-cell-2";
                    propertyItem.innerHTML = `
                  <div class="u-container-layout u-container-layout-4">
                                <div class="u-expanded-width-sm u-expanded-width-xs u-radius-10 u-shape u-shape-round u-white u-shape-2"></div>
                                <div class="u-border-1 u-border-grey-10 u-expanded-width-xs u-line u-line-horizontal u-line-2"></div>
                                <img class="u-bottom-left-radius-8 u-expanded-width-sm u-expanded-width-xs u-image u-image-round u-top-left-radius-8 u-image-3" src="https://www.colliers.com/-/media/images/colliers/asia/regional-image-library/1536x1040-hero-researchnews/generic1536x1040pxkl.ashx?bid=0a1129f133ff4180be8f1e1ccb78c8f5" alt="" data-image-width="1536" data-image-height="1040">
                                <div class="u-bottom-right-radius-10 u-container-style u-expanded-width-sm u-expanded-width-xs u-grey-10 u-group u-shape-round u-group-3">
                                    <div class="u-container-layout u-container-layout-5"><span class="u-file-icon u-icon u-icon-circle u-text-palette-2-base u-white u-icon-12"><img src="images/17.png" alt=""></span><span class="u-file-icon u-icon u-icon-circle u-text-custom-color-2 u-white u-icon-13"><img src="images/18.png" alt=""></span><span class="u-file-icon u-icon u-icon-circle u-text-palette-2-base u-white u-icon-14"><img src="images/19.png" alt=""></span>
                                        <a href="https://nicepage.com/k/card-html-templates" class="u-border-2 u-border-hover-white u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-34 u-text-hover-white u-white u-btn-2"><span class="u-file-icon u-icon u-text-palette-2-base"><img src="images/20.png" alt=""></span>&nbsp;Follow
                                        </a>
                                    </div>
                                </div>
                                <h2 class="u-text u-text-default u-text-10">Price AED 760​,000</h2>
                                <h6 class="u-text u-text-default u-text-11">Brand New | Modren Layout | Bright and Roomy</h6><span class="u-file-icon u-icon u-text-grey-40 u-icon-16"><img src="images/21.png" alt=""></span>
                                <h6 class="u-text u-text-default u-text-12">International City , Lawnz Residence</h6>
                                <h6 class="u-text u-text-grey-40 u-text-13">International City , Lawnz Residence</h6><span class="u-file-icon u-icon u-icon-17"><img src="images/684908.png" alt=""></span><span class="u-file-icon u-icon u-text-grey-40 u-icon-18"><img src="images/23.png" alt=""></span><span class="u-file-icon u-icon u-text-grey-40 u-icon-19"><img src="images/24.png" alt=""></span><span class="u-file-icon u-icon u-text-grey-40 u-icon-20"><img src="images/25.png" alt=""></span>
                                <h6 class="u-text u-text-default u-text-grey-40 u-text-14">2 Beds&nbsp;</h6>
                                <h6 class="u-text u-text-default u-text-grey-40 u-text-15">2 Beds&nbsp;</h6>
                                <h6 class="u-text u-text-default u-text-grey-40 u-text-16">2 Beds&nbsp;</h6>
                                <h6 class="u-text u-text-default u-text-grey-40 u-text-17">1</h6>
                                <div class="u-black u-bottom-left-radius-20 u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-opacity u-opacity-35 u-shape-round u-group-4">
                                    <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-container-layout-6">
                                        <h5 class="u-text u-text-body-alt-color u-text-default u-text-18">Name Here</h5>
                                    </div>
                                </div><span class="u-border-1 u-border-grey-25 u-file-icon u-grey-10 u-icon u-icon-rounded u-radius-5 u-icon-21"><img src="images/786251.png" alt=""></span><span class="u-border-1 u-border-grey-25 u-file-icon u-grey-10 u-icon u-icon-rounded u-radius-5 u-text-custom-color-1 u-icon-22"><img src="images/27.png" alt=""></span>
                                <img class="u-border-2 u-border-white u-image u-image-round u-radius-3 u-image-4" src="https://wp-tid.zillowstatic.com/8/real-estate-agent-broker-7f9bb8.png" alt="" data-image-width="1600" data-image-height="1067">
                            </div>`;

                    propertyContent.appendChild(propertyItem);
                    place-=1;

                }
            })
        }
        renderProjects(1,start,end)

        function numPages() {
            return Math.ceil(projectData.length / pageSize);
        }

        function previousPage(){
            if(currentPage > 1)
                currentPage--;
            renderProjects(currentPage)
        }

        function nextPage(){
            start+=10
            end+=10
            renderProjects(currentPage,start,end)
        }

       // document.querySelector('#nextButton').addEventListener('click', nextPage, false);




        /* ===================== */
        // Main Block






