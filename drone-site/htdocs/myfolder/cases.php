<?php
return [
    'low-altitude-logistics' => [
        'title' => ['zh'=>'低空物流运输','en'=>'Low-Altitude Logistics Transport'],
        'subtitle' => ['zh'=>'围绕最后一公里配送、山区海岛补给和自动物流流程的无人机运输方案','en'=>'Drone transport solutions for last-mile delivery, mountain/island resupply and automated logistics workflows'],
        'image' => 'assets/customer/logistics-150-1.png',
        'summary' => ['zh'=>'飞行魔方的物流无人机方案覆盖运输自动化、可视化、可控化和网络化流程，可用于最后一公里及复杂区域配送场景。','en'=>'Flicube logistics drone solutions support automated, visible, controllable and networked transport workflows for last-mile delivery and complex-area supply missions.'],
        'pain_points' => [
            ['zh'=>'目前物流最后一公里仍主要依赖快递员人工投放，效率低且消耗大量人力资源。','en'=>'Last-mile logistics still relies heavily on manual delivery, resulting in low efficiency and high labor consumption.'],
            ['zh'=>'在山区、海岛等交通不便区域，传统配送更加困难。','en'=>'Traditional delivery is particularly difficult in mountains, islands and other hard-to-access regions.'],
            ['zh'=>'物流场景需要从传统配送向集中配送、协同配送、共同配送和智能配送升级。','en'=>'Logistics operations are shifting from traditional delivery toward centralized, coordinated and intelligent distribution.']
        ],
        'solution' => ['zh'=>'FC-130、FC-0510、FC-TS150、FC-TS300 等物流无人机采用四旋翼或大载重多旋翼平台，配有 GPS 自控导航系统、4G 网络收发终端、AI 视觉识别系统、货物自动挂载或自动收放装置，并具备 GPS 自主导航、定点悬停、指点控制、黑匣子记录和失控保护等功能。无人机可通过 4G 网络和无线电通信技术与调度端进行数据传输，接收目的坐标后按设定流程执行飞行、投送与返航。','en'=>'Logistics platforms such as the FC-130, FC-0510, FC-TS150 and FC-TS300 use quadcopter or heavy multirotor designs with GPS autonomous navigation, 4G communication terminals, AI vision systems and automated cargo handling mechanisms. They support autonomous navigation, position hold, point control, black-box recording and fail-safe protection, transmitting data to the dispatch center via 4G and radio links for flight, delivery and return operations.'],
        'products' => ['FC-130 小型物流无人机','FC-0510 智能物流无人机','FC-TS150 150 公斤物流无人机','FC-TS300 300 公斤物流无人机'],
        'process' => [
            ['zh'=>'提前设置多条飞行航线。','en'=>'Preconfigure multiple flight routes.'],
            ['zh'=>'无人机控制平台选择目的地，系统按预设规则匹配合适航线。','en'=>'Select the destination on the control platform and let the system match the appropriate route.'],
            ['zh'=>'操作员根据物流信息装载货物后发起起飞流程，按预设航线执行飞行。','en'=>'Load cargo according to logistics information and launch along the preset route.'],
            ['zh'=>'到达目的地后结合 AI 视觉识别地面标志进行定位，完成投送后返航。','en'=>'Upon arrival, use AI vision to recognize ground markers, complete delivery and return.']
        ],
        'deliverables' => [['zh'=>'物流无人机平台','en'=>'Logistics drone platform'],['zh'=>'后台管理控制系统','en'=>'Back-end management and control system'],['zh'=>'微信小程序物流下单管理系统','en'=>'WeChat mini-program order management system'],['zh'=>'自动物流 / 快递流程支持','en'=>'Support for automated logistics / courier workflows']]
    ],
    'heavy-industrial-transport' => [
        'title' => ['zh'=>'中重载工业运输','en'=>'Medium and Heavy Industrial Transport'],
        'subtitle' => ['zh'=>'围绕 100 公斤、150 公斤和 300 公斤级运输任务的大载重无人机方案','en'=>'Heavy-lift drone solutions for 100 kg, 150 kg and 300 kg-class transport missions'],
        'image' => 'assets/customer/logistics-150-3.png',
        'summary' => ['zh'=>'方案覆盖 FC-5100N、FC-TS150、FC-TS300 等平台，突出模块化机身、大载重、运输便利性和行业挂载扩展能力。','en'=>'This solution covers platforms such as the FC-5100N, FC-TS150 and FC-TS300, emphasizing modular airframes, heavy payloads, transport convenience and industry-specific payload expansion.'],
        'pain_points' => [
            ['zh'=>'大载重运输任务要求平台兼顾载重、续航、结构强度和运输便利性。','en'=>'Heavy transport missions require balanced payload, endurance, structural strength and transportability.'],
            ['zh'=>'工业运输、农业运输、光伏板挂载和高空抛投等任务对挂载方式和平台稳定性要求较高。','en'=>'Industrial transport, agricultural transport, solar panel lifting and aerial drop missions demand robust payload integration and platform stability.'],
            ['zh'=>'复杂环境下的大载重任务需要避障、图传、返航和后台管理能力。','en'=>'Heavy-duty missions in complex environments require obstacle avoidance, video transmission, return control and back-end management.']
        ],
        'solution' => ['zh'=>'大载重平台采用模块化设计，搭载快速拆卸分布式四电池或大容量电池系统，采用下折四轴八桨结构，可扩展避障雷达、防地雷达和前置 FPV 图像回传。FC-5100N 采用折叠机臂 / 快拆运输脚架设计，FC-TS150 和 FC-TS300 则进一步强化模块化机身、AI 视觉识别、GPS/RTK 自控定位导航系统以及多机后台管理控制系统。','en'=>'Heavy-lift platforms use modular designs with quick-detach distributed battery systems or high-capacity power systems, along with folding quad-octocopter structures. They can integrate obstacle radar, terrain radar and front FPV transmission. The FC-5100N features folding arms and quick-release transport skids, while the FC-TS150 and FC-TS300 further enhance modularity, AI vision, GPS/RTK autonomous navigation and fleet back-end management.'],
        'products' => ['FC-5100N 100 公斤运输无人机','FC-TS150 150 公斤物流无人机','FC-TS300 300 公斤物流无人机'],
        'process' => [
            ['zh'=>'根据运输任务选择 100 公斤、150 公斤或 300 公斤级平台。','en'=>'Choose a 100 kg, 150 kg or 300 kg-class platform based on the transport mission.'],
            ['zh'=>'配置货物挂载系统、图传和任务扩展模块。','en'=>'Configure cargo payload systems, video links and mission expansion modules.'],
            ['zh'=>'通过控制平台选择目的地并规划合适的飞行路线。','en'=>'Select the destination and plan the appropriate route on the control platform.'],
            ['zh'=>'到达目标区域后执行定位降落、卸货和返航控制。','en'=>'Upon arrival, execute precision landing, unloading and return control.']
        ],
        'deliverables' => [['zh'=>'中重载无人机平台','en'=>'Medium and heavy-lift UAV platform'],['zh'=>'货物挂载与 FPV 图传系统','en'=>'Cargo payload and FPV video system'],['zh'=>'多机后台管理系统','en'=>'Fleet back-end management system'],['zh'=>'行业任务部署支持','en'=>'Industry deployment support']]
    ],
    'emergency-firefighting' => [
        'title' => ['zh'=>'应急消防与灾害救援','en'=>'Emergency Firefighting and Disaster Rescue'],
        'subtitle' => ['zh'=>'基于 FC-F150pro 的复杂火灾场景空中侦查与投送方案','en'=>'An aerial reconnaissance and delivery solution for complex fire scenarios based on the FC-F150pro'],
        'image' => 'assets/customer/fire-hero.png',
        'summary' => ['zh'=>'FC-F150pro 面向复杂火灾场景，可应用于森林火灾、城市建筑、危化品和灾害救援等任务。','en'=>'The FC-F150pro is built for complex fire scenarios, including forest fires, urban buildings, hazardous materials and disaster rescue.'],
        'pain_points' => [
            ['zh'=>'传统消防面临高风险、难抵达、效率低、地形复杂受限和响应时间长等挑战。','en'=>'Traditional firefighting faces high risk, difficult access, low efficiency, terrain constraints and slow response times.'],
            ['zh'=>'复杂火灾场景通常需要较快抵达并具备空中侦查、空中投送能力。','en'=>'Complex fire scenarios often require rapid arrival, aerial reconnaissance and airborne delivery capability.'],
            ['zh'=>'夜间和复杂环境中需要更稳定的成像与飞行支持能力。','en'=>'Night and complex environments require more stable imaging and flight support.']
        ],
        'solution' => ['zh'=>'FC-F150pro 可搭载 6 枚 × 25kg 水基灭火弹，最大载重 150 公斤，配备双光云台（可见光 + 红外）、避障能力和模块化设计，可用于空中侦查、定点投送与复杂环境作业。具体应用效果需结合实际场景评估。','en'=>'The FC-F150pro carries up to 6 × 25 kg water-based extinguishing bombs with a 150 kg payload capacity. It features a dual-spectrum gimbal (visible + infrared), obstacle avoidance and modular design for aerial reconnaissance, precision delivery and operation in complex environments. Actual mission performance depends on the operating scenario.'],
        'products' => ['FC-F150pro 大载重消防投弹无人机飞行平台'],
        'process' => [
            ['zh'=>'针对火灾或救援场景完成起飞部署。','en'=>'Deploy and launch for the fire or rescue scenario.'],
            ['zh'=>'利用双光成像系统进行目标确认和火场侦查。','en'=>'Use the dual-spectrum imaging system for target confirmation and fireground reconnaissance.'],
            ['zh'=>'执行定点投弹灭火或空中吊运 / 投送任务。','en'=>'Perform precision extinguishing bomb delivery or aerial hoisting / payload delivery.'],
            ['zh'=>'在复杂环境下保持安全飞行并辅助后续处置。','en'=>'Maintain safe flight in complex environments and support follow-up response.']
        ],
        'deliverables' => [['zh'=>'消防投弹无人机平台','en'=>'Firefighting bombing UAV platform'],['zh'=>'双光成像侦查能力','en'=>'Dual-spectrum reconnaissance capability'],['zh'=>'灭火弹投送能力','en'=>'Extinguishing bomb delivery capability'],['zh'=>'复杂火灾场景实施支持','en'=>'Complex fire scenario deployment support']]
    ],
    'cultural-drone-show' => [
        'title' => ['zh'=>'文旅演艺与品牌活动','en'=>'Cultural Performances and Brand Events'],
        'subtitle' => ['zh'=>'基于星幻编队无人机和室内编队平台的演艺展示方案','en'=>'Performance solutions based on outdoor and indoor drone show platforms'],
        'image' => 'assets/customer/show-a8.png',
        'summary' => ['zh'=>'星幻编队无人机 V2.1 与室内编队无人机分别适用于外场大型表演和室内近距离图案展示。','en'=>'The StarMagic V2.1 and indoor drone show platform are designed for large-scale outdoor performances and close-range indoor pattern displays respectively.'],
        'pain_points' => [
            ['zh'=>'外场复杂环境对编队定位精度、抗干扰能力和通信稳定性要求高。','en'=>'Outdoor environments demand high positioning accuracy, anti-interference capability and communication stability.'],
            ['zh'=>'大型演出需要降低图案设计难度并提高飞行效率。','en'=>'Large performances require simpler pattern design workflows and higher flight efficiency.'],
            ['zh'=>'室内活动空间有限，对无人机尺寸、定位速度和安全间距要求更严格。','en'=>'Indoor venues impose stricter requirements on drone size, positioning speed and safe spacing.']
        ],
        'solution' => ['zh'=>'星幻编队无人机 V2.1 采用多星多频 RTK 定位系统、升级动力系统和自主网通信系统，并配套图案航线设计地面软件；室内编队无人机采用 UWB 定位，定位速度小于 1 秒，定位精度 10cm，支持数字、字母和图案效果，可用于室内展示活动。','en'=>'The StarMagic V2.1 uses multi-band RTK positioning, an upgraded propulsion system and self-organized networking, along with ground software for pattern route design. The indoor drone show platform uses UWB positioning with sub-second lock time and 10 cm accuracy, supporting numbers, letters and pattern effects for indoor events.'],
        'products' => ['星幻编队无人机 V2.1', '室内编队无人机'],
        'process' => [
            ['zh'=>'根据活动场地选择室外星幻编队或室内编队平台。','en'=>'Choose the outdoor StarMagic platform or indoor platform according to the venue.'],
            ['zh'=>'使用地面软件系统设计图案和航线。','en'=>'Design patterns and routes using the ground software system.'],
            ['zh'=>'完成设备展开、通信系统配置和彩排。','en'=>'Complete deployment, communication setup and rehearsals.'],
            ['zh'=>'按活动流程执行编队飞行和视觉展示。','en'=>'Execute the drone show and visual presentation according to the event program.']
        ],
        'deliverables' => [['zh'=>'编队无人机系统','en'=>'Drone show system'],['zh'=>'图案航线设计支持','en'=>'Pattern and route design support'],['zh'=>'地面通信与控制系统','en'=>'Ground communication and control system'],['zh'=>'活动现场执行支持','en'=>'On-site event execution support']]
    ],
    'manned-experience' => [
        'title' => ['zh'=>'载人展示与未来低空体验','en'=>'Manned Display and Future Low-Altitude Experience'],
        'subtitle' => ['zh'=>'面向载人展示、低空体验与试验应用的飞行展示方案','en'=>'A flight display solution for manned showcase, low-altitude experience and trial applications'],
        'image' => 'assets/customer/manned-p.png',
        'summary' => ['zh'=>'该方案围绕蛋壳飞行器的结构尺寸、载重能力、动力系统和续航表现展开，适用于展示、体验与试验类低空应用场景。','en'=>'This solution centers on Eggcraft structural dimensions, payload capability, propulsion system and endurance, making it suitable for display, experience and trial low-altitude applications.'],
        'pain_points' => [
            ['zh'=>'载人飞行平台对结构可靠性、动力能力和起飞重量控制要求高。','en'=>'Manned flight platforms demand high structural reliability, propulsion capability and takeoff weight control.'],
            ['zh'=>'展示类场景需要兼顾运输便利性和平台外观展示效果。','en'=>'Display scenarios must balance transport convenience with presentation quality.'],
            ['zh'=>'在低空体验和试验应用中，需要明确载重和续航边界。','en'=>'Low-altitude experience and trial applications require clear payload and endurance boundaries.']
        ],
        'solution' => ['zh'=>'蛋壳飞行器对称轴距 2660mm，展开尺寸 3000 × 2888 × 1570mm，最大载重 90kg，整机重量（含电池）116kg，电池为 18S 140AH，电机功率 60kW（max），最大起飞重量 206kg，最大飞行速度大于 15m/s。平台采用折叠机臂 / 快拆运输脚架设计，空载续航大于 50 分钟，负载 90kg 时续航大于 15 分钟。','en'=>'Eggcraft features a 2660 mm wheelbase, 3000 × 2888 × 1570 mm unfolded size, 90 kg max payload, 116 kg total weight with batteries, an 18S 140AH battery system, 60 kW max motor power, 206 kg max takeoff weight and top speed above 15 m/s. It uses folding arms and quick-release transport skids, with over 50 minutes endurance unloaded and over 15 minutes with a 90 kg payload.'],
        'products' => ['蛋壳飞行器'],
        'process' => [
            ['zh'=>'根据展示或体验需求确认场地与安全边界。','en'=>'Confirm the venue and safety boundaries based on display or experience needs.'],
            ['zh'=>'完成设备运输、展开和飞行前检查。','en'=>'Transport, unfold and inspect the platform before flight.'],
            ['zh'=>'结合展示目标安排静态展示或试验性飞行展示。','en'=>'Arrange static display or demonstration flights according to the presentation goal.'],
            ['zh'=>'输出后续试点沟通与展示资料。','en'=>'Prepare follow-up pilot project communication and display materials.']
        ],
        'deliverables' => [['zh'=>'载人飞行平台展示','en'=>'Manned flight platform display'],['zh'=>'平台能力说明','en'=>'Capability presentation'],['zh'=>'展示场景部署支持','en'=>'Display deployment support'],['zh'=>'试验性场景沟通支持','en'=>'Trial scenario communication support']]
    ],
    'low-altitude-platform' => [
        'title' => ['zh'=>'低空飞行综合管理服务平台','en'=>'Integrated Low-Altitude Flight Management Platform'],
        'subtitle' => ['zh'=>'支持多机管理、航线规划、任务分发与实时回传的低空飞行综合管理平台','en'=>'An integrated low-altitude management platform supporting fleet control, route planning, task dispatch and real-time return links'],
        'image' => 'assets/customer/fire-title.png',
        'summary' => ['zh'=>'该平台支持 PC、Android、iOS 等跨平台操作，并提供二次开发接口，可为物流、应急响应、城市管理、安全和农业等提供平台级支持。','en'=>'The platform supports PC, Android and iOS with open development interfaces, providing platform-level support for logistics, emergency response, urban management, security and agriculture.'],
        'pain_points' => [
            ['zh'=>'多机任务场景下，需要统一管理无人机飞行状态、任务执行和起降站点。','en'=>'Multi-aircraft operations require unified management of flight status, mission execution and takeoff/landing stations.'],
            ['zh'=>'行业任务差异大，平台需同时支持物流、消防、安全、农业等多类型任务。','en'=>'Different industries require the platform to support logistics, firefighting, security, agriculture and other mission types.'],
            ['zh'=>'任务执行过程中需要实时监控飞行数据、视频回传和环境状态。','en'=>'Mission execution requires real-time monitoring of flight data, video return and environmental status.']
        ],
        'solution' => ['zh'=>'平台支持飞机集群统计、飞机管理、模块挂载管理、飞机对频管理、航线设计与规划、站点规划、实时飞行数据监控、飞机参数设置、任务分发与执行以及高清图像实时回传。平台可支持巡检任务、安全任务、消防任务、物流投放和农业植保，并可为政府、企业等单位提供定制化的低空飞行解决方案。','en'=>'The platform supports fleet statistics, aircraft management, payload module management, frequency pairing, route design and planning, station planning, real-time flight monitoring, aircraft parameter settings, mission dispatch and execution, and real-time HD image return. It can support inspection, security, firefighting, logistics delivery and agricultural missions, with customized low-altitude solutions for government and enterprise users.'],
        'products' => ['低空飞行综合管理服务平台'],
        'process' => [
            ['zh'=>'接入无人机与任务站点，配置飞行属性和挂载模块。','en'=>'Connect aircraft and mission stations, then configure flight attributes and payload modules.'],
            ['zh'=>'设计航线、设置任务类型并绑定任务站点。','en'=>'Design routes, set task types and bind mission stations.'],
            ['zh'=>'实时监控飞行数据、视频回传和任务执行状态。','en'=>'Monitor flight data, video return and mission status in real time.'],
            ['zh'=>'通过平台进行任务分发、执行管理和后续优化。','en'=>'Use the platform for task dispatch, execution management and ongoing optimization.']
        ],
        'deliverables' => [['zh'=>'跨平台飞行管理系统','en'=>'Cross-platform flight management system'],['zh'=>'航线与任务规划能力','en'=>'Route and mission planning capability'],['zh'=>'实时监控与视频回传能力','en'=>'Real-time monitoring and video return'],['zh'=>'行业级平台定制支持','en'=>'Industry-grade customization support']]
    ],
    'indoor-outdoor-show' => [
        'title' => ['zh'=>'室内外联动演出方案','en'=>'Indoor-Outdoor Linked Performance Solution'],
        'subtitle' => ['zh'=>'覆盖室内展示与室外大场景活动的联动演出方案','en'=>'A combined performance solution covering indoor showcases and large outdoor events'],
        'image' => 'assets/customer/show-line1.png',
        'summary' => ['zh'=>'该方案适合需要同时覆盖室内展示和室外大场景活动的项目，可根据不同场地条件匹配相应编队平台与执行方式。','en'=>'Suitable for projects requiring both indoor showcase and outdoor large-scene performances, with matching platforms and workflows for different venues.'],
        'pain_points' => [
            ['zh'=>'室内外场景切换时，对不同平台的定位方式、通信方式和部署节奏要求不同。','en'=>'Switching between indoor and outdoor scenes requires different positioning methods, communication systems and deployment rhythms.'],
            ['zh'=>'活动需要兼顾近距离展示效果和远距离大尺度演出效果。','en'=>'Events must balance close-range detail with long-range large-scale visual impact.'],
            ['zh'=>'联动展示对图案规划、现场执行和节奏衔接要求较高。','en'=>'Linked performances demand tight coordination in pattern planning, on-site execution and timing.']
        ],
        'solution' => ['zh'=>'室内编队无人机采用 UWB 定位，适合数字、字母和图案效果；星幻编队无人机 V2.1 采用多星多频 RTK 定位系统、自主网通信系统和全自动图案航线设计软件。结合两类平台，可形成室内外分场景展示方案。','en'=>'Indoor platforms use UWB positioning and are ideal for numbers, letters and pattern effects, while the StarMagic V2.1 uses multi-band RTK positioning, self-organized networking and automated pattern route design software. Together they form a scene-based indoor-outdoor performance solution.'],
        'products' => ['室内编队无人机', '星幻编队无人机 V2.1'],
        'process' => [
            ['zh'=>'根据室内外场地条件分别选择平台。','en'=>'Select platforms separately according to indoor and outdoor venue conditions.'],
            ['zh'=>'完成图案与展示内容规划。','en'=>'Plan patterns and presentation content.'],
            ['zh'=>'进行现场部署、定位系统校准和彩排。','en'=>'Complete on-site deployment, positioning calibration and rehearsals.'],
            ['zh'=>'按活动节奏分别执行室内与室外展示。','en'=>'Execute indoor and outdoor shows according to the event schedule.']
        ],
        'deliverables' => [['zh'=>'室内外双平台方案','en'=>'Dual-platform indoor-outdoor solution'],['zh'=>'图案设计与执行支持','en'=>'Pattern design and execution support'],['zh'=>'现场部署流程','en'=>'On-site deployment workflow'],['zh'=>'联动展示建议','en'=>'Linked-show planning recommendations']]
    ],
    'indoor-pattern-design' => [
        'title' => ['zh'=>'室内编队图案设计','en'=>'Indoor Drone Pattern Design'],
        'subtitle' => ['zh'=>'适用于近距离活动场景的室内图案展示方案','en'=>'An indoor pattern display solution for close-range event scenarios'],
        'image' => 'assets/customer/show-line3.png',
        'summary' => ['zh'=>'该方案重点体现室内编队平台在定位方式、飞行时间、准备效率和图案展示适配性方面的能力，适合近距离活动与室内演出场景。','en'=>'This solution highlights indoor platform capability in positioning, endurance, preparation efficiency and pattern suitability for close-range events and indoor performances.'],
        'pain_points' => [
            ['zh'=>'室内活动空间有限，需要更短的定位时间和更小的安全间距。','en'=>'Indoor venues require shorter positioning times and smaller safety spacing.'],
            ['zh'=>'近距离观看对图案精度和飞行稳定性要求较高。','en'=>'Close-range viewing demands higher pattern accuracy and flight stability.'],
            ['zh'=>'活动执行通常节奏紧凑，需要快速部署和较短准备时间。','en'=>'Event execution is often tight in timing and requires fast deployment with short setup time.']
        ],
        'solution' => ['zh'=>'室内编队无人机尺寸 208.67 × 208.67 × 93.92mm，重量 190g，采用 UWB 定位，定位速度小于 1 秒，定位精度 10cm，最大飞行相对高度小于 10m，飞行时间 13 分钟，建议表演时长 5 分钟，表演最短准备时长 10 分钟，可实现数字及字母效果和图案效果。','en'=>'The indoor platform measures 208.67 × 208.67 × 93.92 mm and weighs 190 g. It uses UWB positioning with sub-second lock time, 10 cm accuracy, under-10 m relative altitude, 13 minutes flight time, recommended 5-minute performance duration and as little as 10 minutes preparation time, supporting number, letter and pattern effects.'],
        'products' => ['室内编队无人机'],
        'process' => [
            ['zh'=>'确认室内场地净高、面积和安全边界。','en'=>'Confirm indoor clearance height, floor area and safety boundaries.'],
            ['zh'=>'根据活动目标设计数字、字母或图案效果。','en'=>'Design numbers, letters or pattern effects according to the event objective.'],
            ['zh'=>'完成 UWB 定位部署、设备布置和彩排。','en'=>'Deploy the UWB positioning system, arrange equipment and rehearse.'],
            ['zh'=>'按预定时长执行近距离编队展示。','en'=>'Perform the close-range drone show according to the planned duration.']
        ],
        'deliverables' => [['zh'=>'室内编队平台','en'=>'Indoor drone show platform'],['zh'=>'图案设计支持','en'=>'Pattern design support'],['zh'=>'定位部署与执行方案','en'=>'Positioning deployment and execution plan'],['zh'=>'活动现场支持','en'=>'On-site event support']]
    ]
];
