"use strict";
(self.webpackChunkvehikl_website = self.webpackChunkvehikl_website || []).push([
    [603],
    {
        7221: function (e, t, n) {
            n.r(t),
                n.d(t, {
                    default: function () {
                        return v;
                    },
                });
            var a = n(7294),
                l = n(7764),
                i = n(1758),
                r = n(8780),
                o = n(7528),
                s = n(5861),
                c = n(7757),
                m = n.n(c),
                u = n(2081),
                d = n(5689),
                p = n(1510),
                h = function () {
                    var e = a.useState(!1),
                        t = e[0],
                        n = e[1],
                        l = a.useState("Ontario, Canada"),
                        i = l[0],
                        o = l[1],
                        c = a.useState(""),
                        h = c[0],
                        g = c[1],
                        v = a.useState(""),
                        f = v[0],
                        E = v[1],
                        w = a.useState(""),
                        b = w[0],
                        k = w[1],
                        y = a.useState(""),
                        S = y[0],
                        x = y[1],
                        C = a.useState(""),
                        N = C[0],
                        D = C[1],
                        A = a.useState(),
                        M = A[0],
                        P = A[1],
                        j = a.useState(!1),
                        V = j[0],
                        _ = j[1],
                        q = a.useState("Developer"),
                        L = q[0],
                        O = (q[1], a.useState(!1)),
                        T = O[0],
                        z = O[1],
                        I = a.useState([]),
                        X = I[0],
                        Z = I[1],
                        H = (function () {
                            var e = (0, s.Z)(
                                m().mark(function e(t) {
                                    var a, l;
                                    return m().wrap(
                                        function (e) {
                                            for (;;)
                                                switch ((e.prev = e.next)) {
                                                    case 0:
                                                        return (
                                                            t.preventDefault(),
                                                            z(!0),
                                                            (a = {
                                                                github_link: b,
                                                                linkedin_link:
                                                                    S,
                                                                message: N,
                                                            }),
                                                            (l =
                                                                new FormData()).append(
                                                                "name",
                                                                h
                                                            ),
                                                            l.append(
                                                                "email",
                                                                f
                                                            ),
                                                            l.append(
                                                                "location",
                                                                i
                                                            ),
                                                            l.append(
                                                                "is_coop",
                                                                V ? "1" : "0"
                                                            ),
                                                            l.append(
                                                                "position",
                                                                L
                                                            ),
                                                            l.append(
                                                                "resume",
                                                                M
                                                            ),
                                                            Object.entries(a)
                                                                .filter(
                                                                    function (
                                                                        e
                                                                    ) {
                                                                        e[0];
                                                                        return e[1];
                                                                    }
                                                                )
                                                                .forEach(
                                                                    function (
                                                                        e
                                                                    ) {
                                                                        var t =
                                                                                e[0],
                                                                            n =
                                                                                e[1];
                                                                        l.append(
                                                                            t,
                                                                            n
                                                                        );
                                                                    }
                                                                ),
                                                            (e.prev = 11),
                                                            (e.next = 14),
                                                            (0, p.v)(
                                                                "job-applications",
                                                                l
                                                            )
                                                        );
                                                    case 14:
                                                        n(!0), (e.next = 21);
                                                        break;
                                                    case 17:
                                                        (e.prev = 17),
                                                            (e.t0 =
                                                                e.catch(11)),
                                                            console.log(
                                                                JSON.parse(
                                                                    e.t0.message
                                                                )
                                                            ),
                                                            Z(
                                                                JSON.parse(
                                                                    e.t0.message
                                                                )
                                                            );
                                                    case 21:
                                                        z(!1);
                                                    case 22:
                                                    case "end":
                                                        return e.stop();
                                                }
                                        },
                                        e,
                                        null,
                                        [[11, 17]]
                                    );
                                })
                            );
                            return function (t) {
                                return e.apply(this, arguments);
                            };
                        })(),
                        R =
                            M && ("application/pdf" !== M.type || M.size > 2e6)
                                ? "Please upload a PDF with the max file size 2MB"
                                : "";
                    return a.createElement(
                        a.Fragment,
                        null,
                        a.createElement(
                            "form",
                            {
                                className: "flex flex-col gap-6 max-w-2xl",
                                onSubmit: H,
                            },
                            a.createElement(
                                u.eQ,
                                { legend: "Location" },
                                a.createElement(u.Y8, {
                                    label: "Ontario, Canada",
                                    value: "Ontario, Canada",
                                    checked: "Ontario, Canada" === i,
                                    onChange: o,
                                    name: "location",
                                })
                            ),
                            a.createElement(u.nv, {
                                required: !0,
                                errorMessage: (0, p.C)(X, "name"),
                                label: "Name",
                                placeholder: "Your name",
                                value: h,
                                onChange: g,
                            }),
                            a.createElement(u.nv, {
                                required: !0,
                                errorMessage: (0, p.C)(X, "email"),
                                label: "Email",
                                placeholder: "you@example.com",
                                type: "email",
                                value: f,
                                onChange: E,
                            }),
                            a.createElement(u.nv, {
                                errorMessage: (0, p.C)(X, "github_link"),
                                label: "Github",
                                placeholder: "https://github.com/name",
                                value: b,
                                onChange: k,
                            }),
                            a.createElement(u.nv, {
                                errorMessage: (0, p.C)(X, "linkedin_link"),
                                label: "LinkedIn",
                                placeholder: "https://linkedin.com/in/name",
                                value: S,
                                onChange: x,
                            }),
                            a.createElement(u.S2, {
                                required: !0,
                                errorMessage: R,
                                label: "Upload resume",
                                value: M,
                                onChange: P,
                            }),
                            a.createElement(u.nv, {
                                as: "textarea",
                                label: "Message",
                                value: N,
                                onChange: D,
                            }),
                            a.createElement(u.XZ, {
                                label: "I'm interested in co-op",
                                checked: V,
                                onChange: function () {
                                    return _(!V);
                                },
                            }),
                            a.createElement(
                                u.zx,
                                {
                                    className: "mt-6 self-start",
                                    loading: T,
                                    disabled: T,
                                },
                                "Submit"
                            )
                        ),
                        a.createElement(
                            r.u_,
                            {
                                show: t,
                                className: "w-[32rem]",
                                onClose: function () {
                                    g(""),
                                        E(""),
                                        k(""),
                                        x(""),
                                        D(""),
                                        P(void 0),
                                        n(!1);
                                },
                            },
                            a.createElement(
                                d.X6,
                                { as: "h2" },
                                "Hello ",
                                h,
                                ","
                            ),
                            a.createElement(
                                d.nv,
                                { variant: "lead", className: "mb-3" },
                                "We have received your application for the position of developer."
                            ),
                            a.createElement(
                                d.nv,
                                { variant: "lead" },
                                "Thank you for your interest in this role. We are reviewing your qualifications and will contact you if you are selected for an interview."
                            )
                        )
                    );
                },
                g = n(3001),
                v = function () {
                    return a.createElement(
                        l.T,
                        {
                            title: "Developer",
                            description:
                                "Apply to become a developer at Vehikl",
                            ogUrl: "https://vehikl.com/jobs/developer",
                        },
                        a.createElement(i.j, {
                            heading: "Developer at Vehikl",
                            image: 1,
                            description:
                                "Vehikl invests in our clients and our employees. If you are someone eager to learn, collaborate with others, and produce excellent results, then apply today to join our fast growing team!",
                        }),
                        a.createElement(
                            r.W2,
                            null,
                            a.createElement(
                                "div",
                                { className: "max-w-3xl" },
                                a.createElement(
                                    o.X6,
                                    { as: "h2", variant: "h2" },
                                    "Developer"
                                ),
                                a.createElement(
                                    o.nv,
                                    { className: "mb-8" },
                                    "As a new member of our team, you will help build the interfaces, behaviours, architecture, and code quality of premium web and mobile applications. You will follow projects for new and existing clients from start to finish while working closely with those clients as well as your team. At Vehikl, mob programming is a big part of our processes and how we work. You will mob daily with other developers on our team to produce clean code with efficiency and finesse. Being a software consultancy that specializes in PHP and JavaScript, we are looking for someone with experience using the following tools, languages and frameworks:"
                                ),
                                a.createElement(
                                    g.Z,
                                    { className: "mb-12" },
                                    a.createElement("li", null, "HTML, CSS"),
                                    a.createElement(
                                        "li",
                                        null,
                                        "JavaScript, TypeScript, React, Vue, Node, Nest, Express"
                                    ),
                                    a.createElement("li", null, "PHP, Laravel"),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Redis, NoSQL, SQL"
                                    )
                                ),
                                a.createElement(
                                    o.X6,
                                    { as: "h3", variant: "h3" },
                                    "The Day-to-Day Life of a Developer at Vehikl"
                                ),
                                a.createElement(
                                    g.Z,
                                    { className: "mb-12" },
                                    a.createElement(
                                        "li",
                                        null,
                                        "Focus on the implementation of development; ongoing integration, code review, pair programming, mob programming, etc."
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Develop and maintain web and mobile applications end-to-end; everything from what the user sees to the code on the server"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Participate in Vehikl Growth Sessions daily - a creative space that promotes growth, learning, and knowledge sharing"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Implementation of app features, RESTful APIs, and UI modifications"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Write clean, maintainable code using TDD"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Compile, understand, and analyze our clients’ needs"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Excellent verbal and written communication skills with the ability to present complex technical information"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Participate in client meetings"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Validate and verify whether the newly developed apps are in line with project intentions, remain coherent with current code, and optimize when required"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Document key advancements to allow for smooth knowledge transfer between other developers and the client to understand the new application and its features"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Mentoring, guiding and working with developers"
                                    )
                                ),
                                a.createElement(
                                    o.X6,
                                    { as: "h3", variant: "h3" },
                                    "Qualifications"
                                ),
                                a.createElement(
                                    g.Z,
                                    { className: "mb-12" },
                                    a.createElement(
                                        "li",
                                        null,
                                        "Extensive knowledge of back-end components and front-end development"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Experience composing interfaces, state management, a good sense of design"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Ability to understand and account for user needs"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Resourcefulness, initiative and ability to resolve issues through elegant and innovative solutions"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Dedication to producing quality work demonstrated throughout the development cycle"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Strong interpersonal and communication skills"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Ability to work as part of a team"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Ability to adapt to change"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Results focused"
                                    )
                                ),
                                a.createElement(
                                    o.X6,
                                    { as: "h3", variant: "h3" },
                                    "Nice-to-Haves"
                                ),
                                a.createElement(
                                    g.Z,
                                    { className: "mb-12" },
                                    a.createElement(
                                        "li",
                                        null,
                                        "Experience with container technologies and orchestration; Docker, Kubernetes, etc."
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Understanding of performance and scalability issues in applications"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Experience working with distributed systems"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "An active member of the community; developer advocate in online and local communities"
                                    ),
                                    a.createElement(
                                        "li",
                                        null,
                                        "Ability to lead and participate in client meetings acting as the project manager and spokesperson for the development team"
                                    )
                                )
                            ),
                            a.createElement(h, null)
                        )
                    );
                };
        },
    },
]);
//# sourceMappingURL=component---src-pages-jobs-developer-tsx-94a340c9a02c9532fb80.js.map
