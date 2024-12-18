import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { usePage } from "@inertiajs/react";

function Form(){
    const user = usePage().props.auth.user;
    const csrf = document.querySelector('meta[name=csrf-token]').getAttribute("content");
    console.log(usePage());
    return(
        <AuthenticatedLayout>
            create a form
            <section className="create">
                <form action={route('posts.store')} method="post" className="create__form">
                    <input type="hidden" name="_token" value={csrf} />
                    <input type="text" className="create__input" name="title" placeholder="title" />
                    <input type="text" className="create__input" name="intro" placeholder="intro" />
                    <input type="text" className="create__input" name="description" placeholder="description"/>
                    <input type="text" className="create__input" name="image" placeholder="image" />
                    <input type="hidden" name="author" value={user.name}/>
                    <input type="submit" />
                </form>
            </section>
        </AuthenticatedLayout>
    );
}

export default Form;