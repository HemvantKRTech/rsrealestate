<div class="tcl bullet data divider p15px propEnq bs3px3px">
    @if(session('mailsuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('mailsuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="h h2 fw6"><b class="plusMinus"></b> Send an enquiry for this property?</div>
    <div class="showHide_rp mt7px">
        <p><span class="alpha75">Contact Person</span> : Mr. Satinder Singh Chadha </p>
        <div class="fo mt15px">
            <span class="db bdr p12px pl20px pr20px xxlarge">
                <i class="fa fa-phone mr5px"></i> <span class="dif"> 9872023591 </span>
            </span>
        </div>
        <!-- Update form action to Laravel route -->
        <form name="static_form" method="post" action="{{ route('property.enquiry.submit') }}">
            @csrf
            <div class="fo mt25px form-bdr">
                <div class="mb15px">
                    <input type="text" name="name" id="contact_person" placeholder="Name" required />
                    <span class="red small"></span>
                </div>
                <div class="mb15px">
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <span class="red small"></span>
                </div>
                <div class="mb20px fl w100">
                    <div class="w50px pr fl ofh">
                        <div id="isdpropCode" class="isdCode pr0px">+91</div>
                    </div>
                    <input type="text" name="phone" id="phone" class="fl ml10px" style="width:calc(100% - 70px);" placeholder="Mobile No" required />
                    <span class="fl red small"></span>
                </div>
                <div class="fl w100 mb15px">
                    <textarea name="message" id="details" rows="3" required placeholder="Message "></textarea>
                    <span class="fl red small"></span>
                </div>
                <div class="mt25px mb15px">
                    <input type="submit" name="submit" value="Send Enquiry" class="db theme2 xlarge fw6 p12px bdr ttu">
                </div>
            </div>
        </form>
    </div>
</div>
