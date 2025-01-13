<!-- Sidebar Menu Start -->
<div class="app-menu">

    <!-- Brand Logo -->
    <a href="index.html" class="logo-box">
        <img src="{{ asset('assets/images/logo-light.png')}}" class="logo-light h-6" alt="Light logo">
        <img src="{{ asset('assets/images/logo-dark.png')}}" class="logo-dark h-6" alt="Dark logo">
    </a>

    <!--- Menu -->
    <div data-simplebar>
        <ul class="menu">
            <li class="menu-item">
                <a href="{{ url('/') }}" class="menu-link">
                    <span class="menu-icon"><i class="uil uil-estate"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
            
            <!-- Animals -->
            <li class="menu-item">
                <a href="{{ url('animals') }}" class="menu-link">
                    <span class="menu-icon"><i class="uil uil-plus-circle"></i></span>
                    <span class="menu-text">Animals</span>  
                </a>
            </li>

            <!-- Calender -->
            <li class="menu-item">
                <a href="{{ url('calender') }}" class="menu-link">
                    <span class="menu-icon"><i class="uil uil-calender"></i></span>
                    <span class="menu-text">Calendar</span>  
                </a>
            </li>

            <!-- Contact -->
            <li class="menu-item">
                <a href="{{ url('contacts') }}" class="menu-link">
                    <span class="menu-icon"><i class="uil uil-user-square"></i></span>
                    <span class="menu-text">Contacts</span>  
                </a>
            </li>

            <!-- Elements -->
            <!-- <li class="menu-title">Elements</li>

            <li class="menu-item">
                <a href="ui-components.html" class="menu-link">
                    <span class="menu-icon"><i class="uil uil-apps"></i></span>
                    <span class="menu-text"> Components </span>
                </a>
            </li>
            

            <li class="menu-item">
                <a href="javascript:void(0)" data-hs-collapse="#sidenavForms" class="menu-link">
                    <span class="menu-icon"><i class="uil uil-file-alt"></i></span>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul id="sidenavForms" class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="forms-elements.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Form Elements</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-masks.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Masks</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-editor.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Editor</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-validation.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Validation</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-layout.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Form Layout</span>
                        </a>
                    </li>
                </ul>
            </li>            


            <li class="menu-item">
                <a href="tables-basic.html" class="menu-link">
                    <span class="menu-icon"><i class="uil uil-th"></i></span>
                    <span class="menu-text"> Tables </span>
                </a>
            </li>

        </ul> -->
    </div>
</div>
<!-- Sidebar Menu End  -->