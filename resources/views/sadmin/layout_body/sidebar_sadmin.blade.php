<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r bg-light-navbg border-light-background sm:translate-x-0 dark:bg-dark-navbg dark:border-dark-background" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-light-navbg dark:bg-dark-navbg">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{route('sadmin.dashboard')}}" class="flex items-center p-2 rounded-lg text-light-text hover:text-light-hovicon hover:dark:text-dark-hovicon dark:text-dark-text hover:bg-light-hover dark:hover:bg-dark-hover group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-light-icon dark:text-dark-icon group-hover:text-light-hovicon dark:group-hover:text-dark-hovicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.66 1.39l-5.66 2.83-5.66-2.83A1.99 1.99 0 0 0 4 3v18a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a1.99 1.99 0 0 0-1.34-1.61zM12 19c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zm1-10h-2v3H9v2h2v3h2v-3h2v-2h-2v-3z"/>
                  </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Parking Map</span>
            </a>
         </li>

         <li>
            <a href="{{route('sadmin.vehicles')}}" class="flex items-center p-2 rounded-lg text-light-text hover:text-light-hovicon hover:dark:text-dark-hovicon dark:text-dark-text hover:bg-light-hover dark:hover:bg-dark-hover group">
              <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-light-icon dark:text-dark-icon group-hover:text-light-hovicon dark:group-hover:text-dark-hovicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M20 10h-1V5a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v5H4a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3zM6 6h12v4H6V6zm10 12H8v-6h8v6zm4-3a1 1 0 0 1-1 1h-2v-2h3a1 1 0 0 1 0 2zm0-4a1 1 0 0 1-1 1h-3V9h2a1 1 0 0 1 0 2z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Vehicles</span>

            </a>
         </li>
         <li>
            <a href="{{route('sadmin.manual_entry')}}" class="flex items-center p-2 rounded-lg text-light-text hover:text-light-hovicon hover:dark:text-dark-hovicon dark:text-dark-text hover:bg-light-hover dark:hover:bg-dark-hover group">
              <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-light-icon dark:text-dark-icon group-hover:text-light-hovicon dark:group-hover:text-dark-hovicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm1 16a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9h16zm-9-7H7v2h4v-2zm0 4H7v2h4v-2z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Manual Entry</span>
            </a>
         </li>
         <li>
           <a href="{{route('sadmin.server_status_sadmin')}}" class="flex items-center p-2 rounded-lg text-light-text hover:text-light-hovicon hover:dark:text-dark-hovicon dark:text-dark-text hover:bg-light-hover dark:hover:bg-dark-hover group">
              <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-light-icon dark:text-dark-icon group-hover:text-light-hovicon dark:group-hover:text-dark-hovicon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                 <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Server Status</span>
           </a>
        </li>
         <li>
            <a href="{{route('sadmin.payment_sadmin')}}" class="flex items-center p-2 rounded-lg text-light-text hover:text-light-hovicon hover:dark:text-dark-hovicon dark:text-dark-text hover:bg-light-hover dark:hover:bg-dark-hover group">
              <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-light-icon dark:text-dark-icon group-hover:text-light-hovicon dark:group-hover:text-dark-hovicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M20 5H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2zm-7 11v2H9v-2H7v-2h2v-2h2v2h2v2h-2zm3-8v4h-6V8h6zm2 4h2v2h-2v-2z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Payment</span>
            </a>
         </li>
         <li>
            <a href="{{route('sadmin.settings')}}" class="flex items-center p-2 rounded-lg text-light-text hover:text-light-hovicon hover:dark:text-dark-hovicon dark:text-dark-text hover:bg-light-hover dark:hover:bg-dark-hover group">
              <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-light-icon dark:text-dark-icon group-hover:text-light-hovicon dark:group-hover:text-dark-hovicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M21.08 11.73l-2.27-.68-.36-1.86c.14-.55.21-1.12.21-1.69s-.07-1.14-.21-1.69l2.27-.68c.33-.1.55-.4.55-.76s-.22-.66-.55-.76l-2.27-.68c-.14-.55-.36-1.07-.68-1.54l1.43-1.43c.33-.33.33-.87 0-1.2l-1.41-1.41c-.33-.33-.87-.33-1.2 0L15.1 2.1c-.46-.31-.98-.54-1.54-.68l-.36-2.27c-.1-.33-.4-.55-.76-.55s-.66.22-.76.55l-.36 2.27c-.55.14-1.08.36-1.54.68l-1.41-1.41c-.33-.33-.87-.33-1.2 0l-1.41 1.41c-.33.33-.33.87 0 1.2l1.43 1.43c-.31.46-.54.98-.68 1.54l-2.27.68c-.33.1-.55.4-.55.76s.22.66.55.76l2.27.68c-.14.55-.36 1.07-.68 1.54L2.1 14.9c-.33.33-.33.87 0 1.2l1.41 1.41c.33.33.87.33 1.2 0l1.41-1.41c.46.31.98.54 1.54.68l.36 2.27c.1.33.4.55.76.55s.66-.22.76-.55l.36-2.27c.55-.14 1.08-.36 1.54-.68l2.27.68c.14.55.36 1.07.68 1.54l-1.43 1.43c-.33.33-.33.87 0 1.2l1.41 1.41c.33.33.87.33 1.2 0l1.41-1.41c.46-.31.98-.54 1.54-.68l.36 2.27c.1.33.4.55.76.55s.66-.22.76-.55l.36-2.27c.55-.14 1.07-.36 1.54-.68l2.27.68c.33.1.55.4.55.76s-.22.66-.55.76zm-9.08 2.27c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Settings</span>
            </a>
         </li>

         <li>
            <a href="{{route('sadmin.logout')}}" class="flex items-center p-2 rounded-lg text-light-text hover:text-light-hovicon hover:dark:text-dark-hovicon dark:text-dark-text hover:bg-light-hover dark:hover:bg-dark-hover group">
               <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-light-icon dark:text-dark-icon group-hover:text-light-hovicon dark:group-hover:text-dark-hovicon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
            </a>
         </li>

      </ul>
   </div>
</aside>
