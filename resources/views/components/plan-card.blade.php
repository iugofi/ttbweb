<!-- resources/views/components/plan-card.blade.php -->
<div class="xl:col-span-3 col-span-12 order-mobile2">
    <div class="team-groups">
        <div class="box">
            <div
                class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0">
                <div class="box">
                    <div class="box-body">
                        <div class="!p-6">
                            <div class="flex justify-between items-center mb-4">
                                <div class="text-[1.125rem] font-semibold">{{ $plan->name }}</div>
                                <div></div>
                            </div>
                            <div class="text-[1.5625rem] font-bold mb-1">${{ $plan->price }}<sub
                                    class="text-[#8C9097] dark:text-white/50 font-semibold text-[.6875rem] ms-1">/
                                    Per Month</sub></div>
                            <div class="mb-1 text-[#8C9097] dark:text-white/50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam.</div>
                            <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                            <ul class="list-none mb-0">
                                <li class="flex items-center mb-4">
                                    <span class="me-2">
                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                    </span>
                                    <span><strong class="me-1">5 Free</strong>Websites</span>
                                </li>
                                <li class="flex items-center mb-4">
                                    <span class="me-2">
                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                    </span>
                                    <span><strong class="me-1">5 GB</strong>Hard disk storage</span>
                                </li>
                                <li class="flex items-center mb-4">
                                    <span class="me-2">
                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                    </span>
                                    <span><strong class="me-1">2 Years</strong>Email support</span>
                                </li>
                                <li class="flex items-center mb-4">
                                    <span class="me-2">
                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                    </span>
                                    <span><strong class="me-1">5</strong>Licenses</span>
                                </li>
                                <li class="flex items-center mb-4">
                                    <span class="me-2">
                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                    </span>
                                    <span>Custom SEO optimization</span>
                                </li>
                                <li class="flex items-center mb-4">
                                    <span class="me-2">
                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                    </span>
                                    <span>Chat Support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
