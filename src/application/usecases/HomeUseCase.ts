import { HomeRepository } from "../../domain/repositories/HomeRepository";

export class HomeUseCase {
    public constructor (
        private readonly homeRepository: HomeRepository
    ) {}

    public test() {
        return 1;
    }
}