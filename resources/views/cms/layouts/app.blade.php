<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Nunito+Sans:opsz,wght@6..12,400;6..12,600;6..12,700;6..12,800;6..12,900&display=swap"
        rel="stylesheet">

    <style>
        /* ===== DESIGN TOKENS ===== */
        :root {
            /* Primary palette (image baru) */
            --primary-50: #fff4d5;
            --primary-100: #f7df9a;
            --primary-200: #edc762;
            --primary-300: #d6a847;
            --primary-400: #c4962f;
            --primary: #d6a847;
            --primary-600: #a87512;
            --primary-700: #7a560d;
            --primary-800: #35270d;
            --primary-900: #141008;
            --secondary: #FF8F00;
            /* secondary / AB */
            --secondary-bg: #FFF1DE;
            --secondary-ink: #C56A00;

            /* aliases biar konsisten */
            --blue: var(--primary);
            --purple: var(--primary);
            --purple-700: var(--primary-700);

            --content-bg: #eef1f6;
            --surface: #ffffff;
            --line: #e7e9ef;
            --ink: #283041;
            --ink-soft: #5a6072;
            --ink-muted: #9aa1b1;
            --side-text: #f4efe2;
            --side-muted: #b99a45;
            --green: #5cb377;
            --green-700: #4ea268;
            --gold: #d6a847;
            --gold-700: #c4962f;
            --danger: #d4685f;
            --danger-700: #c2554c;
            --pending: #d98324;
            --pending-bg: #fdf2e2;
            --approved: #5a9e4b;
            --approved-bg: #eaf5e6;
            --rejected: #b91c1c;
            --rejected-bg: #fbeaea;
            --radius: 18px;
            --radius-sm: 10px;
            --shadow-card: 0 1px 2px rgba(20, 28, 46, .04), 0 8px 24px rgba(20, 28, 46, .06);
            --shadow-pop: 0 16px 44px rgba(20, 28, 46, .16);
            --sidebar-w: 266px;
            --sidebar-mini: 80px;
            --topbar-h: 72px;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: "Nunito Sans", sans-serif;
            font-size: 15px;
            color: var(--ink-soft);
            background: radial-gradient(1100px 480px at 100% -8%, rgba(16, 155, 220, .07), transparent 60%),
                radial-gradient(900px 420px at -6% 8%, rgba(92, 179, 119, .06), transparent 60%), var(--content-bg);
        }

        .display-font {
            font-family: "Baloo 2", cursive
        }

        /* ===== SIDEBAR ===== */
        .app {
            display: flex;
            min-height: 100vh
        }

        .sidebar {
            width: var(--sidebar-w);
            background: linear-gradient(180deg, #201909, #080704);
            color: var(--side-text);
            position: fixed;
            inset: 0 auto 0 0;
            display: flex;
            flex-direction: column;
            z-index: 1040;
            border-right: 1px solid rgba(214, 168, 71, .22);
            box-shadow: 16px 0 42px rgba(8, 7, 4, .32);
            transition: width .26s cubic-bezier(.4, 0, .2, 1), transform .26s ease
        }

        .sidebar__brand {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 24px 20px 20px;
            min-height: var(--topbar-h)
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            flex: none;
            background: linear-gradient(135deg, #f1c96b, #a87512);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #120f08;
            font-family: "Baloo 2";
            font-weight: 800;
            font-size: 22px;
            box-shadow: 0 8px 20px rgba(214, 168, 71, .36);
            cursor: pointer
        }

        .brand-word {
            font-family: "Baloo 2";
            font-weight: 800;
            color: #fff;
            font-size: 25px;
            letter-spacing: .4px;
            white-space: nowrap;
            overflow: hidden;
            transition: opacity .2s, width .2s
        }

        .sidebar__label {
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .16em;
            color: var(--side-muted);
            padding: 8px 24px;
            text-transform: uppercase;
            transition: opacity .2s
        }

        .nav-side {
            padding: 0 14px 18px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            overflow-y: auto;
            overflow-x: hidden
        }

        .nav-side__item {
            position: relative;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 14px;
            border-radius: 12px;
            color: var(--side-text);
            text-decoration: none;
            font-family: "Baloo 2";
            font-weight: 600;
            font-size: 15.5px;
            cursor: pointer;
            border: 0;
            background: none;
            width: 100%;
            text-align: left;
            transition: .15s;
            white-space: nowrap
        }

        .nav-side__item i.lead-ic {
            font-size: 19px;
            width: 24px;
            text-align: center;
            flex: none
        }

        .nav-side__item:hover {
            background: rgba(214, 168, 71, .12);
            color: #fff8e8
        }

        .nav-side__item.is-active {
            background: linear-gradient(135deg, rgba(214, 168, 71, .28), rgba(214, 168, 71, .1));
            color: #fff8e8
        }

        .nav-side__item.is-active::before {
            content: "";
            position: absolute;
            left: -14px;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 24px;
            border-radius: 0 4px 4px 0;
            background: linear-gradient(180deg, #f1c96b, #a87512);
            box-shadow: 0 0 14px rgba(214, 168, 71, .7)
        }

        .nav-label {
            transition: opacity .18s
        }

        .chev {
            margin-left: auto;
            font-size: 13px;
            transition: transform .2s
        }

        .nav-side__item[aria-expanded="true"] .chev {
            transform: rotate(180deg)
        }

        .nav-side__sub {
            display: flex;
            flex-direction: column;
            gap: 2px;
            padding: 3px 0 4px 14px;
            margin-left: 10px;
            border-left: 1px solid rgba(214, 168, 71, .22)
        }

        .nav-side__sub a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 9px 14px;
            border-radius: 9px;
            color: var(--side-muted);
            text-decoration: none;
            font-family: "Baloo 2";
            font-weight: 500;
            font-size: 14.5px;
            transition: .15s;
            white-space: nowrap
        }

        .nav-side__sub a i {
            font-size: 16px;
            width: 20px;
            text-align: center
        }

        .nav-side__sub a:hover {
            background: rgba(214, 168, 71, .12);
            color: var(--side-text)
        }

        /* collapsed */
        .sidebar.mini {
            width: var(--sidebar-mini)
        }

        .sidebar.mini .brand-word,
        .sidebar.mini .sidebar__label,
        .sidebar.mini .nav-label,
        .sidebar.mini .chev {
            opacity: 0;
            width: 0;
            pointer-events: none
        }

        .sidebar.mini .sidebar__brand {
            justify-content: center;
            padding: 24px 0 20px
        }

        .sidebar.mini .nav-side {
            overflow: visible
        }

        .sidebar.mini .nav-side__item {
            justify-content: center;
            gap: 0;
            padding: 13px
        }

        .sidebar.mini .nav-side__sub {
            display: none
        }

        .sidebar.mini .nav-side__sub.flyout:not([hidden]) {
            display: flex;
            position: fixed;
            left: calc(var(--sidebar-mini) + 10px);
            top: var(--flyout-top, 140px);
            min-width: 190px;
            margin: 0;
            padding: 8px;
            border: 1px solid rgba(214, 168, 71, .28);
            border-left: 1px solid rgba(214, 168, 71, .28);
            border-radius: 12px;
            background: #141008;
            box-shadow: var(--shadow-pop);
            z-index: 1060
        }

        .sidebar.mini .nav-side__sub.flyout:not([hidden]) a {
            color: #f4efe2
        }

        .sidebar.mini .nav-side__sub.flyout:not([hidden]) a:hover {
            background: rgba(214, 168, 71, .14);
            color: #fff8e8
        }

        .sidebar.mini .nav-side__item::after {
            content: attr(data-label);
            position: absolute;
            left: 64px;
            top: 50%;
            transform: translateY(-50%) scale(.9);
            background: #141008;
            color: #fff8e8;
            border: 1px solid rgba(214, 168, 71, .32);
            padding: 7px 12px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            font-family: "Nunito Sans";
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: .15s;
            box-shadow: var(--shadow-pop);
            z-index: 5
        }

        .sidebar.mini .nav-side__item:hover::after {
            opacity: 1;
            transform: translateY(-50%) scale(1)
        }

        /* ===== SHELL + TOPBAR ===== */
        .main {
            margin-left: var(--sidebar-w);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
            transition: margin-left .26s cubic-bezier(.4, 0, .2, 1)
        }

        .sidebar.mini~.main {
            margin-left: var(--sidebar-mini)
        }

        .topbar {
            height: var(--topbar-h);
            background: rgba(255, 255, 255, .82);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px;
            position: sticky;
            top: 0;
            z-index: 1030;
            gap: 16px
        }

        .side-toggle {
            background: none;
            border: 0;
            font-size: 23px;
            color: var(--ink);
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: .15s;
            flex: none
        }

        .side-toggle:hover {
            background: #f0f2f6
        }

        .greet {
            display: flex;
            flex-direction: column;
            line-height: 1.25;
            min-width: 0
        }

        .greet .hi {
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink);
            font-size: 17px
        }

        .greet .sub {
            font-size: 12.5px;
            color: var(--ink-muted);
            font-weight: 600
        }

        .topbar__right {
            display: flex;
            align-items: center;
            gap: 8px
        }

        .icon-btn {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--ink-soft);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            cursor: pointer;
            transition: .15s;
            position: relative
        }

        .icon-btn:hover {
            background: #f6f7fa;
            color: var(--ink);
            border-color: #dcdfe7
        }

        .icon-btn.green:hover {
            color: var(--green);
            border-color: var(--green)
        }

        .dot-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            min-width: 19px;
            height: 19px;
            padding: 0 5px;
            border-radius: 999px;
            background: var(--rejected);
            color: #fff;
            font-size: 11px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #fff
        }

        .user-chip {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 6px 12px 6px 6px;
            border-radius: 14px;
            border: 1px solid var(--line);
            background: #fff;
            cursor: pointer;
            transition: .15s
        }

        .user-chip:hover {
            background: #f6f7fa
        }

        .avatar {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--green), #7fc99a);
            color: #fff;
            font-family: "Baloo 2";
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px
        }

        .user-chip .u-name {
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink);
            font-size: 14px;
            line-height: 1.15
        }

        .user-chip .u-role {
            font-size: 11.5px;
            color: var(--ink-muted);
            font-weight: 700
        }

        .dropdown-menu {
            border: 1px solid var(--line);
            border-radius: 14px;
            box-shadow: var(--shadow-pop);
            padding: 8px
        }

        .dropdown-item {
            border-radius: 9px;
            padding: 9px 12px;
            font-weight: 700;
            color: var(--ink-soft)
        }

        .dropdown-item:hover {
            background: #f4f5f8;
            color: var(--ink)
        }

        .dropdown-item.text-danger:hover {
            background: var(--rejected-bg)
        }

        .notif-menu {
            width: 330px
        }

        .notif-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6px 10px 10px;
            border-bottom: 1px solid var(--line);
            margin-bottom: 6px
        }

        .notif-head b {
            font-family: "Baloo 2";
            color: var(--ink);
            font-size: 15px
        }

        .notif-item {
            display: flex;
            gap: 11px;
            padding: 10px;
            border-radius: 10px;
            transition: .12s
        }

        .notif-item:hover {
            background: #f6f7fa
        }

        .notif-ic {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            flex: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px
        }

        .notif-ic.ok {
            background: var(--approved-bg);
            color: var(--approved)
        }

        .notif-ic.no {
            background: var(--rejected-bg);
            color: var(--rejected)
        }

        .notif-ic.wait {
            background: var(--pending-bg);
            color: var(--pending)
        }

        .notif-item .nt {
            font-weight: 700;
            color: var(--ink);
            font-size: 13.5px
        }

        .notif-item .nm {
            font-size: 12px;
            color: var(--ink-muted);
            font-weight: 600
        }

        .content {
            padding: 28px 32px 40px;
            flex: 1
        }

        .page-head {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 22px;
            flex-wrap: wrap;
            gap: 10px
        }

        .page-head h1 {
            font-family: "Baloo 2";
            font-size: 28px;
            font-weight: 800;
            color: var(--ink);
            margin: 0
        }

        .page-head .lead {
            color: var(--ink-muted);
            font-size: 13.5px;
            font-weight: 600;
            margin-top: 3px
        }

        .breadcrumb-mini {
            font-size: 14px;
            color: var(--ink-muted);
            font-weight: 700
        }

        .breadcrumb-mini .sep {
            margin: 0 8px;
            color: #c9cdd6
        }

        .breadcrumb-mini .lnk {
            cursor: pointer
        }

        .breadcrumb-mini .lnk:hover {
            color: var(--primary)
        }

        /* ===== ACTION ROW + LEGEND ===== */
        .action-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            margin: 18px 0 16px
        }

        .filter-bar {
            display: flex;
            align-items: center;
            gap: 9px;
            flex-wrap: wrap;
            min-width: 0
        }

        .fpill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--ink-soft);
            font-weight: 800;
            font-size: 13.5px;
            cursor: pointer;
            transition: .15s;
            white-space: nowrap
        }

        .fpill .cnt {
            background: #eef0f5;
            color: var(--ink-soft);
            border-radius: 999px;
            padding: 1px 8px;
            font-size: 12px
        }

        .fpill:hover {
            border-color: #d7dae2
        }

        .fpill.active {
            background: var(--ink);
            color: #fff;
            border-color: var(--ink)
        }

        .fpill.active .cnt {
            background: rgba(255, 255, 255, .22);
            color: #fff
        }

        .fpill.active.at {
            background: var(--primary);
            border-color: var(--primary)
        }

        .fpill.active.ab {
            background: var(--secondary);
            border-color: var(--secondary)
        }

        /* (2) flat, tanpa dropshadow */
        .btn-add {
            background: linear-gradient(135deg, #201909, #080704);
            border: 1px solid rgba(214, 168, 71, .55);
            color: #f7df9a;
            font-family: "Baloo 2";
            font-weight: 700;
            padding: 12px 20px;
            border-radius: 13px;
            display: inline-flex;
            align-items: center;
            gap: 9px;
            transition: .15s;
            white-space: nowrap;
            flex: none;
            box-shadow: 0 10px 24px rgba(8, 7, 4, .18)
        }

        .btn-add:hover {
            background: linear-gradient(135deg, #2b210c, #100d07);
            border-color: rgba(241, 201, 107, .8);
            color: #fff4d5;
            box-shadow: 0 12px 28px rgba(214, 168, 71, .24)
        }

        .btn-add:active {
            filter: brightness(.97)
        }

        /* (6) legenda AT/AB */
        .type-legend {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 14px 18px;
            margin: 0 0 18px;
            box-shadow: var(--shadow-card)
        }

        .type-legend .tl-head {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink);
            font-size: 14px;
            margin-bottom: 10px
        }

        .type-legend .tl-head i {
            color: var(--primary);
            font-size: 17px
        }

        .type-legend .tl-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 5px 0
        }

        .type-legend .tl-item .type-tag {
            flex: none;
            min-width: 42px;
            justify-content: center;
            margin-top: 1px
        }

        .type-legend .tl-txt {
            font-weight: 600;
            color: var(--ink-soft);
            font-size: 13.5px;
            line-height: 1.45
        }

        .type-legend .tl-txt b {
            color: var(--ink)
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--primary), var(--primary-600));
            border: 0;
            color: #fff;
            font-family: "Baloo 2";
            font-weight: 700;
            padding: 13px 34px;
            border-radius: 13px;
            box-shadow: 0 8px 20px rgba(16, 155, 220, .35);
            transition: .15s
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 26px rgba(16, 155, 220, .42);
            color: #fff
        }

        .btn-edit {
            background: var(--gold);
            border: 0;
            color: #fff;
            font-weight: 800;
            padding: 9px 18px;
            border-radius: 11px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: .15s
        }

        .btn-edit:hover {
            background: var(--gold-700);
            color: #fff
        }

        .btn-del {
            background: var(--danger);
            border: 0;
            color: #fff;
            font-weight: 800;
            padding: 9px 18px;
            border-radius: 11px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: .15s
        }

        .btn-del:hover {
            background: var(--danger-700);
            color: #fff
        }

        .btn-ghost {
            background: #fff;
            border: 1px solid var(--line);
            color: var(--ink-soft);
            font-family: "Baloo 2";
            font-weight: 700;
            padding: 12px 22px;
            border-radius: 13px;
            transition: .15s
        }

        .btn-ghost:hover {
            background: #f6f7fa;
            color: var(--ink)
        }

        /* (3) FAB tablet & mobile */
        .fab {
            display: none;
            position: fixed;
            right: 22px;
            bottom: 24px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 0;
            background: linear-gradient(135deg, var(--primary), var(--primary-600));
            color: #fff;
            font-size: 28px;
            align-items: center;
            justify-content: center;
            box-shadow: 0 12px 28px rgba(16, 155, 220, .5);
            z-index: 1050;
            cursor: pointer;
            transition: .18s
        }

        .fab:hover {
            transform: translateY(-3px) scale(1.05)
        }

        .fab:active {
            transform: scale(.96)
        }

        body.view-add-active .fab {
            display: none !important
        }

        /* ===== CARD / TABLE ===== */
        .card-surface {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow-card);
            overflow: hidden
        }

        .table-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 20px 24px 4px;
            flex-wrap: wrap
        }

        .entries {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--ink-soft);
            font-weight: 700
        }

        .entries select {
            width: 80px;
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 8px 10px;
            font-weight: 800;
            color: var(--ink)
        }

        .search-box {
            position: relative
        }

        .search-box i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--ink-muted)
        }

        .search-box input {
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 11px 14px 11px 40px;
            min-width: 250px;
            font-weight: 600;
            transition: .15s
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(16, 155, 220, .16)
        }

        .tt-left {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap
        }

        .date-filter {
            display: flex;
            align-items: center;
            gap: 8px
        }

        .date-filter .df-lbl {
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink-muted);
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 6px
        }

        .date-filter .df-lbl i {
            color: var(--primary);
            font-size: 15px
        }

        .date-filter .df-input {
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 8px 10px;
            font-weight: 600;
            color: var(--ink);
            font-size: 13.5px
        }

        .date-filter .df-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(16, 155, 220, .15)
        }

        .date-filter .df-sep {
            color: var(--ink-muted);
            font-weight: 800
        }

        .date-filter .df-clear {
            display: none;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--ink-muted);
            width: 32px;
            height: 32px;
            border-radius: 9px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            transition: .15s
        }

        .date-filter .df-clear.show {
            display: inline-flex
        }

        .date-filter .df-clear:hover {
            color: var(--rejected);
            border-color: var(--rejected)
        }

        .wt-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 10px
        }

        .wt-table thead th {
            position: sticky;
            top: 0;
            font-family: "Baloo 2";
            font-size: 14px;
            font-weight: 700;
            color: var(--ink);
            padding: 15px 24px;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            background: #fbfbfd;
            white-space: nowrap
        }

        .wt-table thead th .sort {
            color: #c4c9d4;
            margin-left: 6px;
            font-size: 12px
        }

        .wt-table tbody td {
            padding: 17px 24px;
            border-bottom: 1px solid var(--line);
            color: var(--ink-soft);
            font-weight: 600;
            vertical-align: middle
        }

        .wt-table tbody tr.row-main {
            transition: background .12s
        }

        .wt-table tbody tr.row-main:hover {
            background: #f7fbfe
        }

        /* (5) badge AT primary / AB secondary */
        .type-tag {
            display: inline-flex;
            padding: 3px 11px;
            border-radius: 8px;
            font-weight: 800;
            font-size: 12.5px;
            background: #eef0f5;
            color: var(--ink);
            letter-spacing: .3px
        }

        .type-tag.at {
            background: var(--primary-50);
            color: var(--primary-700)
        }

        .type-tag.ab {
            background: var(--secondary-bg);
            color: var(--secondary-ink)
        }

        .toggle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--primary);
            color: #fff;
            background: var(--primary);
            font-size: 16px;
            cursor: pointer;
            transition: .15s;
            flex: none
        }

        .toggle:hover {
            transform: scale(1.1)
        }

        .toggle.is-open {
            background: var(--danger);
            border-color: var(--danger);
            transform: rotate(180deg)
        }

        .no-cell {
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 800;
            color: var(--ink)
        }

        .detail-row>td {
            padding: 0;
            border-bottom: 1px solid var(--line)
        }

        .detail-wrap {
            overflow: hidden;
            max-height: 0;
            transition: max-height .3s ease
        }

        .detail-inner {
            margin: 4px 18px 20px;
            background: #f7fafc;
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 6px 22px 18px
        }

        .detail-line {
            display: flex;
            gap: 18px;
            align-items: flex-start;
            padding: 14px 2px;
            border-bottom: 1px dashed #e3e6ee
        }

        .detail-line:last-of-type {
            border-bottom: 0
        }

        .detail-line .k {
            min-width: 160px;
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink)
        }

        .detail-line .v {
            color: var(--ink-soft);
            font-weight: 600
        }

        .detail-actions {
            display: flex;
            gap: 12px;
            padding-top: 14px
        }

        .badge-status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-weight: 800;
            font-size: 13px;
            padding: 5px 13px;
            border-radius: 999px
        }

        .badge-status.pending {
            color: var(--pending);
            background: var(--pending-bg)
        }

        .badge-status.approved {
            color: var(--approved);
            background: var(--approved-bg)
        }

        .badge-status.rejected {
            color: var(--rejected);
            background: var(--rejected-bg)
        }

        .empty-state {
            text-align: center;
            padding: 54px 20px;
            color: var(--ink-muted)
        }

        .empty-state i {
            font-size: 44px;
            opacity: .5;
            display: block;
            margin-bottom: 12px
        }

        .table-foot {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 24px;
            flex-wrap: wrap;
            gap: 12px;
            border-top: 1px solid var(--line)
        }

        .table-foot .info {
            color: var(--ink-muted);
            font-weight: 700;
            font-size: 14px
        }

        .pager {
            display: flex;
            gap: 6px
        }

        .pager button {
            border: 1px solid var(--line);
            background: #fff;
            color: var(--ink-soft);
            font-weight: 800;
            padding: 8px 14px;
            border-radius: 10px;
            transition: .15s
        }

        .pager button:hover:not(:disabled) {
            background: #f5f6f8
        }

        .pager button.is-active {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff
        }

        .pager button:disabled {
            opacity: .4
        }

        /* ===== FORM ===== */
        .form-card {
            padding: 34px 38px
        }

        .form-row {
            display: grid;
            grid-template-columns: 170px 1fr;
            gap: 26px;
            align-items: start;
            padding: 15px 0
        }

        .form-row>label.lbl {
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink);
            padding-top: 11px;
            font-size: 16px
        }

        .segment {
            display: flex;
            width: 100%;
            background: #f1f3f8;
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 5px;
            gap: 4px
        }

        .segment button {
            flex: 1;
            justify-content: center;
            border: 0;
            background: none;
            padding: 11px 18px;
            border-radius: 10px;
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink-soft);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 9px;
            transition: .15s;
            font-size: 15px;
            white-space: nowrap
        }

        .segment button .ring {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 2px solid #c2c7d2;
            flex: none;
            transition: .15s
        }

        .segment button.on {
            background: #fff;
            color: var(--ink);
            box-shadow: 0 3px 10px rgba(20, 28, 46, .1)
        }

        .segment button.on .ring {
            border-color: var(--primary);
            background: radial-gradient(circle, var(--primary) 0 4px, transparent 5px)
        }

        .form-control,
        .form-select {
            border: 1px solid #d9dce3;
            border-radius: 12px;
            padding: 14px 16px;
            font-weight: 600;
            color: var(--ink);
            font-size: 15px
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(16, 155, 220, .16)
        }

        .periode {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap
        }

        .periode .sd {
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink-muted)
        }

        .periode .form-control {
            flex: 1 1 220px;
            max-width: none
        }

        .form-actions {
            display: flex;
            gap: 10px
        }

        .help {
            font-size: 13px;
            color: var(--ink-muted);
            margin-top: 7px;
            font-weight: 600
        }

        .invalid-text {
            color: var(--rejected);
            font-size: 13px;
            font-weight: 800;
            margin-top: 7px;
            display: none
        }

        .is-error .form-select,
        .is-error .form-control {
            border-color: var(--rejected);
            box-shadow: 0 0 0 4px rgba(185, 28, 28, .12)
        }

        .is-error .invalid-text {
            display: block
        }

        .app-footer {
            padding: 18px 32px;
            color: var(--ink-muted);
            font-weight: 700;
            font-size: 14px;
            border-top: 1px solid var(--line);
            background: rgba(255, 255, 255, .5)
        }

        .toast-stack {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 1080;
            display: flex;
            flex-direction: column;
            gap: 10px
        }

        .wt-toast {
            background: #fff;
            border: 1px solid var(--line);
            border-left: 4px solid var(--green);
            border-radius: 13px;
            box-shadow: var(--shadow-pop);
            padding: 14px 16px;
            min-width: 300px;
            max-width: calc(100vw - 48px);
            display: flex;
            align-items: flex-start;
            gap: 12px;
            animation: slideIn .25s ease
        }

        .wt-toast.is-out {
            animation: slideOut .25s ease forwards
        }

        .wt-toast i {
            font-size: 21px;
            color: var(--green);
            margin-top: 1px
        }

        .wt-toast.danger {
            border-left-color: var(--rejected)
        }

        .wt-toast.danger i {
            color: var(--rejected)
        }

        .wt-toast .t-title {
            font-family: "Baloo 2";
            font-weight: 700;
            color: var(--ink)
        }

        .wt-toast .t-msg {
            font-size: 13.5px;
            color: var(--ink-soft)
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(24px)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        @keyframes slideOut {
            to {
                opacity: 0;
                transform: translateX(24px)
            }
        }

        .modal-content {
            border: 0;
            border-radius: 18px;
            box-shadow: var(--shadow-pop)
        }

        .modal-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--rejected-bg);
            color: var(--rejected);
            font-size: 28px;
            margin: 0 auto 14px
        }

        .view {
            display: none
        }

        .view.is-active {
            display: block
        }

        .backdrop {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(8, 30, 46, .5);
            z-index: 1035
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width:991px) {
            .sidebar {
                transform: translateX(-100%);
                width: var(--sidebar-w) !important
            }

            .sidebar.is-open {
                transform: none
            }

            .sidebar.is-open .brand-word,
            .sidebar.is-open .sidebar__label,
            .sidebar.is-open .nav-label,
            .sidebar.is-open .chev {
                opacity: 1;
                width: auto;
                pointer-events: auto
            }

            .main,
            .sidebar.mini~.main {
                margin-left: 0
            }

            .greet {
                display: none
            }

            .backdrop.is-open {
                display: block
            }

            /* (3) inline button diganti FAB */
            .action-row .btn-add {
                display: none
            }

            .fab {
                display: flex
            }

            /* filter swipe horizontal */
            .filter-bar {
                flex-wrap: nowrap;
                overflow-x: auto;
                padding-bottom: 6px;
                scrollbar-width: none;
                -webkit-overflow-scrolling: touch;
                -webkit-mask-image: linear-gradient(90deg, #000 92%, transparent);
                mask-image: linear-gradient(90deg, #000 92%, transparent)
            }

            .filter-bar::-webkit-scrollbar {
                display: none
            }

            .fpill {
                flex: none
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 8px
            }

            .form-row>label.lbl {
                padding-top: 0
            }

            .periode {
                flex-direction: column;
                align-items: stretch
            }

            .periode .form-control {
                width: 100%;
                flex: none
            }

            .periode .sd {
                align-self: flex-start
            }
        }

        @media (max-width:575px) {
            .content {
                padding: 18px 16px 30px
            }

            .detail-line {
                flex-direction: column;
                gap: 4px
            }

            .user-chip .u-meta {
                display: none
            }

            .table-toolbar {
                flex-direction: column;
                align-items: stretch;
                gap: 12px
            }

            .table-toolbar .search-box {
                width: 100%
            }

            .tt-left {
                width: 100%
            }

            .date-filter {
                width: 100%;
                flex-wrap: wrap
            }

            .date-filter .df-input {
                flex: 1;
                min-width: 0
            }

            .search-box input {
                min-width: 0;
                width: 100%
            }

            .segment {
                flex-direction: column
            }

            .segment button {
                width: 100%
            }

            .form-actions {
                flex-direction: column
            }

            .form-actions .btn-submit,
            .form-actions .btn-ghost {
                width: 100%;
                text-align: center
            }
        }
    </style>
    <style>
        .project-cover {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            object-fit: cover;
            border: 1px solid var(--line);
            background: #f5f6f8;
            flex: none;
        }

        .project-stack {
            display: flex;
            align-items: center;
            min-width: 116px;
        }

        .project-stack img {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            object-fit: cover;
            border: 2px solid #fff;
            box-shadow: 0 4px 10px rgba(20, 28, 46, .12);
            background: #f5f6f8;
        }

        .project-stack img+img {
            margin-left: -12px;
        }

        .project-title {
            font-family: "Baloo 2";
            font-weight: 800;
            color: var(--ink);
            text-decoration: none;
        }

        .project-title:hover {
            color: var(--primary-700);
        }

        .project-meta {
            color: var(--ink-muted);
            font-size: 13px;
            font-weight: 700;
            margin-top: 2px;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--ink-soft);
            font-weight: 800;
            text-decoration: none;
            word-break: break-word;
        }

        .project-link:hover {
            color: var(--primary-700);
        }

        .pager a,
        .pager span {
            border: 1px solid var(--line);
            background: #fff;
            color: var(--ink-soft);
            font-weight: 800;
            padding: 8px 14px;
            border-radius: 10px;
            transition: .15s;
            text-decoration: none;
            min-width: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .pager a:hover {
            background: #f5f6f8;
            color: var(--ink);
        }

        .pager .is-active {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
        }

        .pager .is-disabled {
            opacity: .4;
            pointer-events: none;
        }

        @media (max-width: 575px) {
            .project-stack {
                min-width: 92px;
            }
        }
    </style>
    <style>
        .project-form-card {
            padding: 34px 38px;
        }

        .field-grid {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 26px;
            align-items: start;
            padding: 16px 0;
        }

        .field-grid .lbl {
            font-family: "Baloo 2";
            font-weight: 800;
            color: var(--ink);
            padding-top: 13px;
            font-size: 16px;
        }

        .required-pill {
            display: inline-flex;
            margin-left: 8px;
            padding: 2px 8px;
            border-radius: 999px;
            background: var(--primary-50);
            color: var(--primary-700);
            font-size: 11px;
            font-weight: 900;
            vertical-align: middle;
        }

        .upload-zone {
            position: relative;
            border: 1.5px dashed #cfd5df;
            border-radius: 14px;
            background: #fbfcfe;
            min-height: 138px;
            padding: 18px;
            transition: .15s;
        }

        .upload-zone:hover {
            border-color: var(--primary);
            background: #fffdfa;
        }

        .upload-empty {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 92px;
            color: var(--ink-soft);
            font-weight: 800;
            text-align: center;
        }

        .upload-empty i {
            color: var(--primary);
            font-size: 20px;
        }

        .upload-zone input[type="file"] {
            position: absolute;
            inset: 0;
            opacity: 0;
            cursor: pointer;
        }

        .preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(132px, 1fr));
            gap: 12px;
            margin-bottom: 12px;
        }

        .preview-item {
            position: relative;
            aspect-ratio: 4 / 3;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--line);
            background: #f5f6f8;
        }

        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .preview-remove {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 28px;
            height: 28px;
            border: 0;
            border-radius: 50%;
            background: var(--danger);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .tag-editor {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            min-height: 54px;
            border: 1px solid #d9dce3;
            border-radius: 12px;
            padding: 8px 10px;
            background: #fff;
        }

        .tag-editor:focus-within {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(214, 168, 71, .16);
        }

        .tag-item {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 10px;
            border-radius: 999px;
            background: var(--primary-50);
            color: var(--primary-700);
            font-weight: 900;
            font-size: 13px;
        }

        .tag-item button {
            border: 0;
            background: transparent;
            color: inherit;
            padding: 0;
            line-height: 1;
            font-size: 15px;
        }

        .tag-editor input {
            border: 0;
            outline: none;
            min-width: 180px;
            flex: 1;
            padding: 7px 4px;
            font-weight: 700;
            color: var(--ink);
        }

        .switch-row {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-height: 52px;
            font-weight: 800;
            color: var(--ink-soft);
        }

        .error-text {
            color: var(--rejected);
            font-size: 13px;
            font-weight: 800;
            margin-top: 7px;
        }

        @media (max-width: 991px) {
            .project-form-card {
                padding: 26px 22px;
            }

            .field-grid {
                grid-template-columns: 1fr;
                gap: 8px;
            }

            .field-grid .lbl {
                padding-top: 0;
            }
        }

        .project-form-card {
            padding: 34px 38px;
        }

        .field-grid {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 26px;
            align-items: start;
            padding: 16px 0;
        }

        .field-grid .lbl {
            font-family: "Baloo 2";
            font-weight: 800;
            color: var(--ink);
            padding-top: 13px;
            font-size: 16px;
        }

        .required-pill {
            display: inline-flex;
            margin-left: 8px;
            padding: 2px 8px;
            border-radius: 999px;
            background: var(--primary-50);
            color: var(--primary-700);
            font-size: 11px;
            font-weight: 900;
            vertical-align: middle;
        }

        .upload-zone {
            position: relative;
            border: 1.5px dashed #cfd5df;
            border-radius: 14px;
            background: #fbfcfe;
            min-height: 138px;
            padding: 18px;
            transition: .15s;
        }

        .upload-zone:hover {
            border-color: var(--primary);
            background: #fffdfa;
        }

        .upload-empty {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 92px;
            color: var(--ink-soft);
            font-weight: 800;
            text-align: center;
        }

        .upload-empty i {
            color: var(--primary);
            font-size: 20px;
        }

        .upload-zone input[type="file"] {
            position: absolute;
            inset: 0;
            opacity: 0;
            cursor: pointer;
        }

        .preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(132px, 1fr));
            gap: 12px;
            margin-bottom: 12px;
        }

        .preview-item {
            position: relative;
            aspect-ratio: 4 / 3;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--line);
            background: #f5f6f8;
        }

        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .preview-remove {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 28px;
            height: 28px;
            border: 0;
            border-radius: 50%;
            background: var(--danger);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .tag-editor {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            min-height: 54px;
            border: 1px solid #d9dce3;
            border-radius: 12px;
            padding: 8px 10px;
            background: #fff;
        }

        .tag-editor:focus-within {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(214, 168, 71, .16);
        }

        .tag-item {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 10px;
            border-radius: 999px;
            background: var(--primary-50);
            color: var(--primary-700);
            font-weight: 900;
            font-size: 13px;
        }

        .tag-item button {
            border: 0;
            background: transparent;
            color: inherit;
            padding: 0;
            line-height: 1;
            font-size: 15px;
        }

        .tag-editor input {
            border: 0;
            outline: none;
            min-width: 180px;
            flex: 1;
            padding: 7px 4px;
            font-weight: 700;
            color: var(--ink);
        }

        .switch-row {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-height: 52px;
            font-weight: 800;
            color: var(--ink-soft);
        }

        .error-text {
            color: var(--rejected);
            font-size: 13px;
            font-weight: 800;
            margin-top: 7px;
        }

        @media (max-width: 991px) {
            .project-form-card {
                padding: 26px 22px;
            }

            .field-grid {
                grid-template-columns: 1fr;
                gap: 8px;
            }

            .field-grid .lbl {
                padding-top: 0;
            }
        }
    </style>


</head>
        @include('cms.layouts.notification')
<body>
    <div class="app">

        <!-- SIDEBAR (tombol collapse di dalam sidebar SUDAH dihapus) -->
        @include('cms.layouts.sidemenu')

        <div class="backdrop" id="backdrop" onclick="closeSidebar()"></div>

        <!-- MAIN -->
        <div class="main">
            @include('cms.layouts.topbar')

            <div class="content">
                @yield('content')

            </div>
            <footer class="app-footer">2026 © Bhuvan Solution.</footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function sideToggle() {
            if (window.innerWidth <= 991) {
                openSidebar();
            } else {
                toggleCollapse();
            }
        }

        function toggleCollapse() {
            document.getElementById('sidebar').classList.toggle('mini');
            closeFlyoutSub();
        }

        function expandSidebar() {
            if (window.innerWidth > 991) document.getElementById('sidebar').classList.remove('mini');
        }

        function closeFlyoutSub() {
            const s = document.getElementById('reportSub');
            if (!s) return;
            s.classList.remove('flyout');
            s.style.removeProperty('--flyout-top');
        }

        function toggleSub(b) {
            const s = document.getElementById('reportSub');
            const sidebar = document.getElementById('sidebar');
            const o = b.getAttribute('aria-expanded') === 'true';
            b.setAttribute('aria-expanded', !o);
            s.hidden = o;
            closeFlyoutSub();
            if (!o && sidebar.classList.contains('mini') && window.innerWidth > 991) {
                const r = b.getBoundingClientRect();
                s.classList.add('flyout');
                s.style.setProperty('--flyout-top', `${r.top}px`);
            }
        }

        function openSidebar() {
            document.getElementById('sidebar').classList.add('is-open');
            document.getElementById('backdrop').classList.add('is-open');
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('is-open');
            document.getElementById('backdrop').classList.remove('is-open');
        }

        function toggleFullscreen() {
            const ic = document.querySelector('#fsBtn i');
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen?.();
                ic.className = 'bi bi-fullscreen-exit';
            } else {
                document.exitFullscreen?.();
                ic.className = 'bi bi-arrows-fullscreen';
            }
        }

        function tick() {
            const n = new Date();
            const h = n.getHours();
            const g = h < 11 ? 'Selamat pagi' : h < 15 ? 'Selamat siang' : h < 19 ? 'Selamat sore' : 'Selamat malam';
            document.getElementById('greetText').textContent = `${g}, Rafi 👋`;
            document.getElementById('clockText').textContent = n.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'long'
            }) + ' · ' + n.toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit'
            });
        }
        tick();
        setInterval(tick, 1000);
    </script>
    @stack('scripts')
</body>

</html>
